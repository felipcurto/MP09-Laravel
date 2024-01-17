<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[UserController::class,'index']);

Route::get('/users',[UserController::class,'index']);

Route::get('/contact',[PagesController::class,'contact']);

Route::get('/about',[PagesController::class,'about']);

Route::get('/tasks',[TaskController::class,'tasks']);