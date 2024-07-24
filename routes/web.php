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
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

Route::middleware(['admin'])->group(function () {
    // Các route dành riêng cho admin
});

// Route cho trang chủ
Route::get('/', function () {
    return view('User.index');
})->name('index');

// Route cho Dashboard - yêu cầu đăng nhập
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource routes - yêu cầu đăng nhập
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
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

// Route đăng ký cho nhân viên
Route::get('/register', [AdminAuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AdminAuthController::class, 'register']);

// AJAX routes for dynamic dropdowns
Route::get('/getDistricts/{city_id}', [CityController::class, 'getDistricts']);
Route::get('/getWards/{district_id}', [DistrictController::class, 'getWards']);

// Các route khác không yêu cầu đăng nhập
// Route::get('/watches', function () {
//     return view('User.watches');
// });

Route::get('/brand/{brand}', function ($brand) {
    return view('User.brand.brand', ['brand' => $brand]);
});

Route::get('/category/{category}', function ($category) {
    return view('User.category.category', ['category' => $category]);
});

Route::get('/contact', function () {
    return view('User.contact');
});

Route::get('/profile', function () {
    return view('User.profile');
});

Route::post('/cart/add/{watch}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{watch}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{watch}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart', function () {
    return view('User.cart');
});


Route::prefix('WatchesStore')->group(function(){
    Route::get('/', [HomeController::class, 'home'])->name('WatchesStore.home');
    Route::get('/watchDetail/{id}', [HomeController::class, 'watchDetail'])->name('WatchesStore.detail');
});



