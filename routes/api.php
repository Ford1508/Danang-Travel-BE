<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RatingCommentController;
use App\Http\Controllers\RatingPostController;
use App\Http\Controllers\UserController;

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

Route::post('/register', [AuthController::class, 'register'],);
Route::post('/login', [AuthController::class, 'login'],);
Route::post('/editprofile/{id}', [UserController::class, 'update']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/changepassword', [UserController::class, 'change_password']);

Route::get('/blog', [BlogController::class, 'index'],);
Route::post('/blog/upload', [BlogController::class, 'store'],);
Route::get("/blog/{id}",[BlogController::class,'show'],);
Route::post("/blog/delete",[BlogController::class,'destroy'],);
Route::post("/blog/update/{id}",[BlogController::class,'update'],);

Route::get('/category', [CategoryController::class, 'index'],);
Route::post('/category/create', [CategoryController::class, 'store'],);
Route::get("/category/{id}",[CategoryController::class,'show'],);
Route::post("/category/delete",[CategoryController::class,'destroy'],);
Route::post("/category/update",[CategoryController::class,'update'],);

Route::get('/blog/rating/{id}', [RatingPostController::class, 'rateblog']);
Route::get('/blog/unrate/{id}', [RatingPostController::class, 'unrateblog']);

Route::get('/comment/add{id}', [CommentController::class, 'blogcomment']);
Route::get('/comment/delete{id}', [CommentController::class, 'deletecomment']);
Route::get('/comment/byblog{id}', [CommentController::class, 'comments_by_blog']);
// Route::get('/comment/add', [CommentController::class, 'blogcomment']);


Route::get('/comment/rating/{id}', [RatingCommentController::class, 'ratecomment']);
Route::get('/comment/unrate/{id}', [RatingCommentController::class, 'unratecomment']);

Route::get('/blog/comment/{id}', [CommentController::class, 'comments_by_blog']);
