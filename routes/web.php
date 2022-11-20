<?php

use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\LinkedinController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SavedPostsController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Psy\Util\Str;

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

    Route::get('/',  [PostController::class, 'index'])->name('post.index');
    Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post.show');
    Route::get('/saved',  [PostController::class, 'saved'])->name('saved');
    Route::get('/create-post',  [PostController::class, 'create'])->middleware(['auth'])->name('create-post');

Route::get('/user/{username}',[UserController::class, 'show'])->name('user.show');

Route::get('/waste-type/create',  [ClubsController::class, 'create'])->name('waste_type.create')->middleware('auth');
Route::post('/waste-type',[ClubsController::class,'store'])->name('waste_type.store')->middleware('auth');
Route::get('/waste-type/{waste-type}/edit',[ClubsController::class,'edit'])->name('waste_type.edit')->middleware('auth');
Route::put('/waste-type/{waste-type}',[ClubsController::class,'update'])->name('waste_type.update')->middleware('auth');
Route::get('/waste-type/{waste-type}',[ClubsController::class,'show'])->name('waste_type.show');


Route::post('editor/image_upload',[PostController::class,'img_upload'])->name('img_upload');


Route::get('/policy', function () {
    return ('<h1>By using our website you consent that we may use your cookies</h1>');
});


//github
//Route::get('/auth/github', function () {
//    return Socialite::driver('github')->redirect();
//});
Route::get('/auth/github/callback',  [GithubController::class, 'handleGithubCallback']);

//google
//Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
//Route::middleware(['auth:sanctum', 'verified'])->get('/',  [PostController::class, 'index']);
//    ->name('dashboard');


//twitter
Route::get('/auth/linkedin/callback/', [LinkedinController::class, 'handleLinkedinCallback']);
//Route::middleware(['auth:sanctum', 'verified'])->get('/',  [PostController::class, 'index']);
//    ->name('dashboard');



Route::get('/linkstorage', function () {
    Artisan::call('storage:link --relative');
});
