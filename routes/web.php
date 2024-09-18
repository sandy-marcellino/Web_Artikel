<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Middleware\AdminMiddleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home', ["title"=> "Home", "active" => "Home"]);
})->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "active" => "About",
        "name" => "Sandy M",
        "email" => "test@gmail.com"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'showMenggunakanBinding']);


Route::get('/categories/{category:slug}', function(Category $category) {
    return view('blog', [
        'title' => "Post by Category: $category->nama",
        "active" => "Categories",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('categories', function() {
    return view('categories', [
        'title' => 'Categories',
        "active" => "Categories",
        'categories' => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('blog', [
        'title' => "Post by Author: $author->name",
        
        'posts' => $author->posts->load('category', 'author')
    ]);
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');