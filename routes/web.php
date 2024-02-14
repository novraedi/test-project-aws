<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DasboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active"=>'Home',
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active"=>'About',
        "name" => "Jabriq",
        "email" => "jabriq@gmail.com",
        "image"  => "shadow.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// halaaman single target

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title'=> 'categories',
        "active"=>'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DasboardPostController::class, 'checkSlug'])
    -> middleware('auth');

Route::resource('/dashboard/posts', DasboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')
    ->middleware('is_admin');
