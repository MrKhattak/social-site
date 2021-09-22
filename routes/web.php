<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => true]);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/startup', [HomeController::class, 'startup']);

/* Profile routes */
Route::get("/profile", [HomeController::class, 'profile'])->name('profile');
Route::put("/profile", [HomeController::class, 'profile']);
Route::post('/profile/add-friends', [HomeController::class, 'friendRequest'])->name('profile.friendRequest');
Route::post('/accept-friend-request', [HomeController::class, 'acceptFriendRquest'])->name('acceptFriendRquest');