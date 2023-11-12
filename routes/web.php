<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\userController;
use App\Http\Controllers\VendorController;

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

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/login', [AuthController::class, 'index'])->name('index');
Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');


Route::group(['middleware' => 'admin'], function () {

    Route::get('/', [adminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');

    // Vendor Route
    Route::get('/vendor', [VendorController::class, 'index'])->name('vendor.index');

    Route::get('/vendor-input', [VendorController::class, 'vendorInput'])->name('vendorInput');
    Route::post('/vendorCreate', [VendorController::class, 'vendorCreate'])->name('vendorCreate');

    Route::get('/vendor-delete/{id}', [VendorController::class, 'vendorDelete'])->name('vendorDelete');

    Route::get('/vendor-update/{id}', [VendorController::class, 'vendorUpdate'])->name('vendorUpdate');
    Route::post('/vendor-update-store', [VendorController::class, 'vendorUpdateStore'])->name('vendorUpdateStore');


    // Distribusi
    Route::get('/distribution', [DistributionController::class, 'index'])->name('distributionIndex');

    Route::get('/distribution-input', [DistributionController::class, 'distributionInput'])->name('distributionInput');
    Route::post('/distributionCreate', [DistributionController::class, 'distributionCreate'])->name('distributionCreate');

    Route::get('/distribution-delete/{id}', [DistributionController::class, 'distributionDelete'])->name('distributionDelete');

    Route::get('/distribution-update/{id}', [DistributionController::class, 'distributionUpdate'])->name('distributionUpdate');
    Route::post('/distribution-update-store', [DistributionController::class, 'distributionUpdateStore'])->name('distributionUpdateStore');

    // User
    Route::get('/user', [UserController::class, 'index'])->name('userIndex');

    Route::get('/user-input', [UserController::class, 'userInput'])->name('userInput');
    Route::post('/userCreate', [UserController::class, 'userCreate'])->name('userCreate');

    Route::get('/user-delete/{id}', [UserController::class, 'userDelete'])->name('userDelete');

    Route::get('/user-update/{id}', [UserController::class, 'userUpdate'])->name('userUpdate');
    Route::post('/user-update-store/{id}', [UserController::class, 'userUpdateStore'])->name('userUpdateStore');

});
