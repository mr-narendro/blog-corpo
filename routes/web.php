<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Models\Category;
use App\Models\User;

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
        'title' => 'HOME',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'ABOUT',
        'active' => 'about',
    ]);
});


Route::get('/blog', [BlogController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}', [BlogController::class, 'show']);


Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "List Category $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category','author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "List Posts By $author->name",
        'posts' => $author->posts->load('category','author'),
    ]);
});

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'List Category',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
