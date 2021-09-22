<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Create new user using API. Free to call on /api/register
     * Required name, username, email, password, password_confirmation, gender \ see $this->validator function below.
     * If successfuly create a user it return a object.
     * @return array{success:string, message:string, $user: /App/Models/User, token:string}
     * You can use token. This token must be set as barear token in authorization header to access secure api routes.
     */

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return new JsonResponse(["success" => false, "messages" => $validator->getMessageBag()->getMessages()], 200);
        }

        $user = $this->create($request->all());

        $token = $user->createToken('web');
        Profile::create([
            'user_id' => $user->id,
        ]);
        if ($user->gender === "male") {
            $user->image = "storage/images/static/blank_profile_male.jpg";
        } else if ($user->gender === "female") {
            $user->image = "storage/images/static/blank_profile_female.jpg";
        } else {
            $user->image = "storage/images/static/default_profile.jpg";
        }
        $user->save();
        event(new Registered($user));
        return new JsonResponse(["success" => true, "message" => "New user created successfully", "user" => $user, "token" => $token->plainTextToken], 200);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required', 'string', 'in:male,female,other']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'password' => hash("sha256", $data['password']),
        ]);
    }


    /**
     * Login a user using API. Free to call on /api/login.
     * Required username|email, password.
     * If successfuly login a user it return a object.
     * @return array{success:string, message:string, $user: /App/Models/User, token:string}
     * You can use token. This token must be set as barear token in authorization header to access secure api routes.
     */

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return new JsonResponse(["success" => false, "messages" => $validator->getMessageBag()->getMessages()], 200);
        }
        $user = User::where('email', $request->email)->orWhere('username', $request->email)->first();
        if ($user && $user->password === hash("sha256", $request->password)) {
            $token = $user->createToken('web');
            if ($request->has('remember') && $request->input('remember') == true) {
                setcookie("token", $token->plainTextToken, time() + 60 * 60 * 24 * 60, '/');
            } else {
                setcookie("token", $token->plainTextToken, 0, '/');
            }
            return new JsonResponse(["success" => true, "message" => "New user created successfully", "user" => $user, "token" => $token->plainTextToken], 200);
        } else {

            return new JsonResponse(["success" => false, "messages" => ['email' => ['Credentials not found in our records']]], 200);
        }
    }

    /**
     * Update profile of user whose token is in request header.
     * Optional parameters are [city, country, edu_class, edu_major, edu_school, hometown, work_place, work_title, work_url, image].
     * Request must have valid token in quthorization header with bearer. See /routes/api.php file for more information.
     * @return array[success:string, message:string]
     * @return "unauthorized" if token is invalid or not given.
     */

    public function profile(Request $request)
    {
        $user = $request->user();
        $profile = $request->user()->profile;
        if ($request->has("city") && $request->input("city")) {
            $profile->city = $request->input("city");
        }
        if ($request->has("country") && $request->input("country")) {
            $profile->country = $request->input("country");
        }
        if ($request->has("edu_class") && $request->input("edu_class")) {
            $profile->edu_class = $request->input("edu_class");
        }
        if ($request->has("edu_major") && $request->input("edu_major")) {
            $profile->edu_major = $request->input("edu_major");
        }
        if ($request->has("edu_school") && $request->input("edu_school")) {
            $profile->edu_school = $request->input("edu_school");
        }
        if ($request->has("hometown") && $request->input("hometown")) {
            $profile->hometown = $request->input("hometown");
        }

        if ($request->has("work_place") && $request->input("work_place")) {
            $profile->work_place = $request->input("work_place");
        }
        if ($request->has("work_title") && $request->input("work_title")) {
            $profile->work_title = $request->input("work_title");
        }
        if ($request->has("work_url") && $request->input("work_url")) {
            $profile->work_url = $request->input("work_url");
        }

        $profile->startup_skip = true;
        $profile->save();

        //Saving user profile image
        if ($request->has('image') && $request->input('image')) {
            $user->deleteImage();
            $user->image = null;
            try {
                $image_parts = explode(";base64,", $request->input('image'));
                $image_type = explode("image/", $image_parts[0])[1];
                $image_base64 = base64_decode($image_parts[1]);

                $fileName = str_replace(' ', '-', round(microtime(true) * 1000) . $user->name . '.' . $image_type);
                $imageFullPath = public_path() . "/storage/images/users/" . $fileName;
                file_put_contents($imageFullPath, $image_base64);

                $user->image = "/storage/images/users/" . $fileName;
            } catch (Exception $e) {
                $user->save();
                return new JsonResponse(["success" => false, "message" => "Image not able to upload. " . $e->getMessage()], 200);
            }
            $user->save();
        }


        return new JsonResponse(["success" => true, "message" => "User profile updated successfuly"], 200);
    }
}
