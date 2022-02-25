<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/about', function(){
    return view('about');
});
Route::get('/works-gallery', function(){
    return view('works-gallery');
});
Route::get('/cats', function(){
    return view('cats');
});
Route::get('/contacts', function(){
    return view('contacts');
});
