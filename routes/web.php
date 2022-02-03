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
// 文章详情页
Route::get('/{article}',[ArticleController::class,'show']);

