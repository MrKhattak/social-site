<?php

namespace App\Http\Controllers;

use App\Models\Momment;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MommentController extends Controller
{
    public function save(Request $request)
    {
        try {
            $user = $request->user();
            $image_parts = explode(";base64,", $request->input('image'));
            $image_type = explode("image/", $image_parts[0])[1];
            $image_base64 = base64_decode($image_parts[1]);

            $fileName = str_replace(' ', '-', round(microtime(true) * 1000) . $user->name . '.' . $image_type);
            $imageFullPath = public_path() . "/storage/images/momments/" . $fileName;
            file_put_contents($imageFullPath, $image_base64);

            $momment = new Momment;
            $momment->user_id = $user->id;
            $momment->value =  "/storage/images/momments/" . $fileName;
            $momment->seen_by = "[]";
            $momment->likes = 0;

            $momment->save();
            return new JsonResponse(["success" => true, "message" => "Story created successfuly", "story" => $momment], 200);
        } catch (Exception $e) {
            return new JsonResponse(["success" => false, "message" => "Some error occured. " . $e->getMessage()], 200);
        }
    }
}
