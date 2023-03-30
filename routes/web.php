<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
// 最初のページの表示
Route::get('/', [UsersController::class, 'index']);
// ユーザー新規投稿画面への遷移
Route::get('/users/post', [UsersController::class, 'migrateToPost']);
// ユーザーの新規投稿機能
Route::post('/users/post', [UsersController::class, 'post']);
// ユーザーの取得機能
Route::get('/users/get', [UsersController::class, 'get']);
//ユーザーの投稿一覧画面への遷移
Route::get('/users/article', [UsersController::class, 'article']);
// ユーザーの更新画面への遷移
Route::get('/users/{user}/put', [UsersController::class, 'migrateToPut']);
// ユーザーの更新機能
Route::put('/users/{user}', [UsersController::class, 'put']);
// ユーザーの削除画面への遷移
Route::get('/users/delete', [UsersController::class, 'migrateToDelete']);
// ユーザーの削除機能
Route::delete('/users/{user}', [UsersController::class, 'delete']);