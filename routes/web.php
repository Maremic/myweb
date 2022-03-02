<?php

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

Route::get('/', [PostController::class, 'home'])->name('Home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

//about, contacts, atd, add as categories => categories to li items to menu,
//at post creating choose on which category, so at page,

// Route::get('/about', [PostController::class, 'about'])->name('About');;

// Route::get('/contacts', [PostController::class, 'contacts'])->name('Contacts');;

// table with categories, hardcoded about, cats, home, works gallery .. route {post:category}/{post:slug}, when creating post => add its category ??

//routes for future image posts.



Route::get('/works-gallery', [ImagesController::class, 'works'])->name('Works Gallery');;

Route::get('/cats', [ImagesController::class, 'cats'])->name('Cats');

//Ways connecting to session and register

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::get('logout', [SessionController::class, 'destroy'])->middleware('auth');

// Admin Section
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});
