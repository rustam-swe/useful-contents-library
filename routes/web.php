<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ContentController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);

//Route::get('/authors', function () {
//    $authors = \App\Models\Author::all();
//    return view('welcome', ['authors' => $authors]);
//});
Route::resource('authors', AuthorController::class);






Route::get('/categories', function(Request $request){
    $name = $request->get('name');

    $category = Category::query()->create([
        'name' => $name,
    ]);

    dump($category);
});

Route::post('/contents', [ContentController::class, 'store']);

Route::get('/contents', [ContentController::class, 'create']);
