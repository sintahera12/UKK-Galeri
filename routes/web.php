<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ImageController;
use App\Models\galeryimage;


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

// Route::get('/', function () {
//     $data = galeryimage::all();

//     return view('welcome', compact('data'));
// });

Route::get('/', [ImageController::class, 'welcome']);
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
Route::post('/comment', [CommentController::class, 'strore'])->name('comment');
Route::get('/welcome', [ImageController::class, 'welcome'])->name('welcome');
Route::get('/detailImage/{image}', [ImageController::class, 'detailImage'])->name('detail');
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::post('/storage-image', [ImageController::class, 'storeImage'])->name('storage-image');
Route::get('/signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::get('/postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');
