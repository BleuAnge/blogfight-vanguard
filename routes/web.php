<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Posts;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Get All
Route::get('/', [PostController::class, 'index']);

//Create Post
Route::get('/posts/create', [PostController::class, 'create']);

//Store Post
Route::post('/posts', [PostController::class, 'store']);

//Get Filter
Route::get('/posts/{post}', [PostController::class, 'getOne']);