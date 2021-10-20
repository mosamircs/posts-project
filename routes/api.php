<?php

use App\Http\Controllers\PostControler;
use App\Http\Controllers\UserControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Posts Routes
 * list all posts and comments associated with it
 */
Route::get('/posts',[UserControler::class,'index']);

/**
 * Show specific post by id
 */
Route::get('/showpost/{id}',[UserControler::class,'show']);
//Route::get('/post/{post}',[UserControler::class,'show']);

/**
 * store post
 */
Route::post('/addpost',[UserControler::class,'store']);

/**
 * comments
 * store comment
 */
Route::post('/addcomment',[PostControler::class,'store']);
