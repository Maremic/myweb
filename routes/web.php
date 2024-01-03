<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ImagesController;
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

//routes for normal post pages (have to find how to post there larger material)

Route::get('/', function(){
        return view('welcome');
});
Route::resource('/sections', SectionController::class);
Route::resource('/category', CategoryController::class);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::get('/category/{id}/section/create', [SectionController::class, 'create']);
//Ways connecting to session and register

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::get('logout', [SessionController::class, 'destroy'])->middleware('auth');
