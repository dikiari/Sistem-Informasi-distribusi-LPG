<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\adminController;

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


Route::get('/login', [AuthController::class, 'index'])->name('index');
Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');


Route::group(['middleware' => 'admin'], function () {

    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');
});
