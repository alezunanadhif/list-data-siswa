<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('welcome');
});

// Authentication
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_in']);
Route::post('register', [AuthController::class, 'register']);

// Dashboard
Route::get('home', [AllController::class, 'index']);
Route::get('home/create', [AllController::class, 'create']);
Route::post('home', [AllController::class, 'store']);
Route::get('home/{id}/edit', [AllController::class, 'edit']);
Route::patch('home/{id}', [AllController::class, 'update']);
Route::delete('home/{id}', [AllController::class, 'destroy']);
Route::get('home/profile', [AllController::class, 'profile']);
