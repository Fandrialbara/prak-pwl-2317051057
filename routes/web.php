<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\http\Controllers\UserController;


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

Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);
Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/user',[UserController::class,'index']);
Route::get('/user/create',[UserController::class,'Create']);
Route::post('/user',[UserController::class,'store']);
Route::post('/user', [UserController::class, 'store'])->name('users.store');