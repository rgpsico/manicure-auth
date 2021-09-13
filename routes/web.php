<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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


Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profile', [UserController::class, 'update_avatar']);
Route::post('/upload_images', [UserController::class, 'upload_images']);
Route::DELETE('image/destroy/{id}', [UserController::class, 'destroy'])->name('image.destroy');
Route::get('/',[SiteController::class, 'index']);
Route::get('/show/{id}',[SiteController::class, 'show']);

Route::post('/destroy/{id}', [HomeController::class, 'destroy']);
Route::post('/status/{id}', [HomeController::class, 'status']);
Route::get('/editar/{id}', [HomeController::class, 'edit']);
Route::post('/editar/update/{id}', [HomeController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/config', [App\Http\Controllers\HomeController::class, 'config'])->name('config');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::post('/configStore', [App\Http\Controllers\HomeController::class, 'configStore'])->name('configStore');