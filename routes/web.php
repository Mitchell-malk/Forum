<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


// 用户模块
// 用户注册
Route::get('/register',[RegisterController::class,'index']);
// 注册行为
Route::post('register',[RegisterController::class,'register']);
// 登录页面
Route::get('/login',[LoginController::class,'index']);
// 登录行为
Route::post('/login',[LoginController::class,'login']);
// 登出行为
Route::get('/logout',[LoginController::class,'logout']);

// 文章模块
// 文章论坛首页
Route::get('/',[ArticleController::class,'index']);

// 文章创建页
Route::get('/create',[ArticleController::class,'create']);
Route::post('/',[ArticleController::class,'store']);
// 文章详情页
Route::get('/{article}',[ArticleController::class,'show']);

//文章编辑页面
Route::get('/{article}/edit',[ArticleController::class,'edit']);
Route::put('/{article}',[ArticleController::class,'update']);
// 文章删除页（物理删除）
Route::get('/{article}/delete',[ArticleController::class,'delete']);

// 图片、视频上传
// Route::post('/image/upload',[ArticleController::class,'imageUpload']);
// Route::post('/video/upload',[ArticleController::class,'videoUpload']);

// 评论模块
// 评论块
Route::post('/{article}/comment',[ArticleController::class,'comment']);
// 点赞和取消赞
Route::get('/{article}/zan',[ArticleController::class,'zan']);
Route::get('/{article}/unzan',[ArticleController::class,'unzan']);

