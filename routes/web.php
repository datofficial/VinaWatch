<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\EngineController;
use App\Http\Controllers\MaterialGlassController;
use App\Http\Controllers\SizeGlassController;
use App\Http\Controllers\AvoidWaterController;
use App\Http\Controllers\SizeStrapController;
use App\Http\Controllers\MaterialStrapController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\AdminAuthController;

// Route của Dashboard - yêu cầu đăng nhập
Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Resource routes - yêu cầu đăng nhập
Route::middleware(['auth'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('manufacturers', ManufacturerController::class);
    Route::resource('engines', EngineController::class);
    Route::resource('materialGlasses', MaterialGlassController::class);
    Route::resource('sizeGlasses', SizeGlassController::class);
    Route::resource('avoidWaters', AvoidWaterController::class);
    Route::resource('sizeStraps', SizeStrapController::class);
    Route::resource('materialStraps', MaterialStrapController::class);
    Route::resource('watches', WatchController::class);
    Route::resource('paymentMethods', PaymentMethodController::class);
    Route::resource('users', UserController::class);
    Route::resource('cities', CityController::class);
    Route::resource('districts', DistrictController::class);
    Route::resource('wards', WardController::class);
});

// Route đăng nhập cho nhân viên
Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login']);

// Route đăng ký cho nhân viên
Route::get('/register', [AdminAuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AdminAuthController::class, 'register']);

// AJAX routes for dynamic dropdowns
Route::get('/getDistricts/{city_id}', [CityController::class, 'getDistricts']);
Route::get('/getWards/{district_id}', [DistrictController::class, 'getWards']);

// Route cho trang index
Route::get('/', function () {
    return view('User.index');
});