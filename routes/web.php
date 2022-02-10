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



