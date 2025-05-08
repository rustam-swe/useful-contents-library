<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * TODO:
 *  1. php artisan install:api
 *  2. creat route with auth:sanctum middleware
 *  3. create user with token (+ return token)
 *  4. make request with token (use Bearer auth in the Authorization header)
 *
 */
Route::post('/tokens/create', function (Request $request) {
    $validated = $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    $user = User::query()->create([
        'name'     => $validated['name'],
        'email'    => $validated['email'],
        'password' => bcrypt($validated['password'])
    ]);

    $token = $user->createToken($validated['name']);

    return response()->json([
        'user'  => $user->name,
        'token' => $token->plainTextToken
    ], 201);
});
Route::get('/contents', function (){
    return \App\Models\Content::all();
});
Route::get('/contents/{id}', function ($id){
    return \App\Models\Content::findOrFail($id);
});
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        dump($request->user());
    });

    Route::get('/genres', function () {
        return \App\Models\Genre::all();
    });
});

Route::prefix('v1')->group(base_path('routes/api/v1.php'));
