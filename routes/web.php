<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
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

Route::resource('/products', ProductController::class);

Route::resource('/abouts', AboutController::class);

Route::resource('/hobbies', HobbyController::class);

Route::resource('/imagesg', ImageController::class);

Route::resource('/works', WorksController::class);

//Ways connecting to session and register

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::get('logout', [SessionController::class, 'destroy'])->middleware('auth');




    // then apply some CSS to make it prettier

    // About model, Post model, --> then make it all clickable with "show", editable with "edit" and deletable with "delete" @method()

    // but first try to make do the first steps in alls, create, index, store.

    // make Bootstrap

    // make edits, delete, show + validation and admin section! (hide create buttons for guests)

    //add comments

    //edit forms to leave old data, as Jeffrey did, validate data.
