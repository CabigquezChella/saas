<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[AuthController::class,'login']);
Route::get('/registration',[AuthController::class,'registration']);
Route::post('/register-user',[AuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[AuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[AuthController::class,'dashboard']);


Route::get('/subscribe',[SubController::class,'subscribe']);
Route::post('/subscribe-user',[SubController::class,'subUser'])->name('subscribe-user');
Route::get('/dashboardv1',[SubController::class,'dashboardv1']);
