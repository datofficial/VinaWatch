<?php

use Illuminate\Http\Request;
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
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\DetailWatchController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route của Dashboard - Chỉ cho phép truy cập khi người dùng đã xác thực qua Sanctum
Route::middleware('auth:sanctum')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Group các route sử dụng middleware 'auth:sanctum'
Route::middleware('auth:sanctum')->group(function () {
    // Các tuyến đường API cho quản lý danh mục sản phẩm
    Route::resource('categories', CategoryController::class);
    // Các tuyến đường API cho quản lý nhà sản xuất
    Route::resource('manufacturers', ManufacturerController::class);
    // Các tuyến đường API cho quản lý động cơ
    Route::resource('engines', EngineController::class);
    // Các tuyến đường API cho quản lý chất liệu kính
    Route::resource('materialGlasses', MaterialGlassController::class);
    // Các tuyến đường API cho quản lý kích thước kính
    Route::resource('sizeGlasses', SizeGlassController::class);
    // Các tuyến đường API cho quản lý khả năng chống nước
    Route::resource('avoidWaters', AvoidWaterController::class);
    // Các tuyến đường API cho quản lý kích thước dây đeo
    Route::resource('sizeStraps', SizeStrapController::class);
    // Các tuyến đường API cho quản lý chất liệu dây đeo
    Route::resource('materialStraps', MaterialStrapController::class);
    // Các tuyến đường API cho quản lý đồng hồ
    Route::resource('watches', WatchController::class);
    // Các tuyến đường API cho quản lý phương thức thanh toán
    Route::resource('paymentMethods', PaymentMethodController::class);
    // Các tuyến đường API cho quản lý người dùng
    Route::resource('users', UserController::class);
    // Các tuyến đường API cho quản lý thành phố
    Route::resource('cities', CityController::class);
    // Các tuyến đường API cho quản lý quận/huyện
    Route::resource('districts', DistrictController::class);
    // Các tuyến đường API cho quản lý phường/xã
    Route::resource('wards', WardController::class);
    // Các tuyến đường API cho quản lý đơn hàng
    Route::resource('orders', OrderController::class);
    // Các tuyến đường API cho quản lý chi tiết đơn hàng
    Route::resource('detailOrders', DetailOrderController::class);
    // Các tuyến đường API cho quản lý chi tiết đồng hồ
    Route::resource('detailWatches', DetailWatchController::class);
});

// Tuyến đường API để lấy thông tin người dùng hiện tại - Chỉ cho phép truy cập khi người dùng đã xác thực qua Sanctum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
