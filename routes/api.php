<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\MommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Routes having middleware auth:sanctum must require bearer token in requet authorization header
 * header options look like this:
 * headers: {
 *       "Authorization": "Bearer $token",
 *       "Accept": "application/json"
 * }
 * You can get token when user is regsiter or login.
 */


/**
 * Get user that have token in request header.
 * Bearer token is required for this api route.
 */
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->post('/profile', [UserController::class, 'profile']);
Route::middleware('auth:sanctum')->post('/momment/save', [MommentController::class, 'save']);
