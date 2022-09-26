<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Product;
use App\Models\Banners;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('posts', function () {
//     return Post::paginate(5);
// });

// Route::middleware('auth:api')->get('/categories/{category:slug}', function(Category $category){
//     return $category->posts->load('category','author');
// });


Route::post('/login', function () {
    $credentials = request()->only('email', 'password');

    if(auth()->once($credentials)) {

        auth()->user()->update(['api_token' => Str::random(64)]);

        return auth()->user();
    }

    return '404 Not Found';

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
});

Route::middleware('auth:api')->get('banners', function () {
    return Banners::all();
});

Route::middleware('auth:api')->get('product/{nama}', function ($nama) {
    return Product::where('nama', $nama)->first();
});
