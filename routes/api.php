<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// This resource function take the name and the resource controller that would create all the routes for us
// apiresource is convenient function similar to resource function but this function is not looking to create and edit becuase that belongs to web application
Route::apiResource('posts', PostController::class);

Route::get('/', function(){
    return 'API';
});
