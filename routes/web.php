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

Route::get('/', [UsersController::class, 'index']);
Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/post', [UsersController::class, 'migrateToPost']);
Route::post('/users/post', [UsersController::class, 'post']);
Route::get('/users/get', [UsersController::class, 'get']);
Route::get('/users/put', [UsersController::class, 'migrateToPut']);
Route::put('/users/{user}', [UsersController::class, 'put']);
Route::get('/users/delete', [UsersController::class, 'migrateToDelete']);
Route::delete('/users/{user}', [UsersController::class, 'delete']);