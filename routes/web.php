<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\UniversitasController;
use App\Http\Controllers\Komentar_PostController;
use App\Http\Controllers\Komentar_forumController;
use App\Http\Controllers\Auth\AuthGoogleController;
use App\Http\Controllers\Volunteer\VolunteerDashboardController;

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

Route::resource('/', IndexController::class);
Route::resource('/index/forum', ForumController::class);
Route::resource('/index/universitas', UniversitasController::class);
Route::resource('/index/volunteer', VolunteerController::class);

Route::middleware(['auth','verified'])->resource('/admin' , AdminController::class);
Route::middleware(['auth','verified'])->resource('/volunteer' , VolunteerController::class);
Route::middleware(['auth','verified'])->resource('/daftar_user' , UserController::class);
Route::middleware(['auth','verified'])->resource('/daftar_vu' , VolunteerController::class);
Route::middleware(['auth','verified'])->resource('/universitas' , UniversitasController::class);
Route::middleware(['auth','verified'])->resource('/forum' , ForumController::class);
Route::middleware(['auth','verified'])->resource('/post' , PostController::class);
Route::middleware(['auth','verified'])->resource('/profile' , ProfileController::class);
Route::middleware(['auth','verified'])->resource('/komentar_post' , Komentar_PostController::class);
Route::middleware(['auth','verified'])->resource('/komentar_forum' , Komentar_forumController::class);

Route::get('auth/user/google', [GoogleController::class, 'GoogleAuth']);
Route::get('auth/google/callback', [GoogleController::class, 'GoogleCallback']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
