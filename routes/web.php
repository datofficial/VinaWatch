
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

// Route của Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Route::resource('categories', CategoryController::class);
Route::prefix('categories')->group(function () {
    Route::get('', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

//Route::resource('manufacturers', ManufacturerController::class);
Route::prefix('manufacturers')->group(function () {
    Route::get('', [ManufacturerController::class, 'index'])->name('manufacturers.index');
    Route::get('/create', [ManufacturerController::class, 'create'])->name('manufacturers.create');
    Route::post('', [ManufacturerController::class, 'store'])->name('manufacturers.store');
    Route::get('/{manufacturer}/edit', [ManufacturerController::class, 'edit'])->name('manufacturers.edit');
    Route::put('/{manufacturer}', [ManufacturerController::class, 'update'])->name('manufacturers.update');
    Route::delete('/{manufacturer}', [ManufacturerController::class, 'destroy'])->name('manufacturers.destroy');
});

//Route::resource('engines', EngineController::class);
Route::prefix('engines')->group(function () {
    Route::get('', [EngineController::class, 'index'])->name('engines.index');
    Route::get('/create', [EngineController::class, 'create'])->name('engines.create');
    Route::post('', [EngineController::class, 'store'])->name('engines.store');
    Route::get('/{engine}/edit', [EngineController::class, 'edit'])->name('engines.edit');
    Route::put('/{engine}', [EngineController::class, 'update'])->name('engines.update');
    Route::delete('/{engine}', [EngineController::class, 'destroy'])->name('engines.destroy');
});

//Route::resource('categories', CategoryController::class);
Route::prefix('materialGlasses')->group(function () {
    Route::get('', [MaterialGlassController::class, 'index'])->name('materialGlasses.index');
    Route::get('/create', [MaterialGlassController::class, 'create'])->name('materialGlasses.create');
    Route::post('', [MaterialGlassController::class, 'store'])->name('materialGlasses.store');
    Route::get('/{materialGlass}/edit', [MaterialGlassController::class, 'edit'])->name('materialGlasses.edit');
    Route::put('/{materialGlass}', [MaterialGlassController::class, 'update'])->name('materialGlasses.update');
    Route::delete('/{materialGlass}', [MaterialGlassController::class, 'destroy'])->name('materialGlasses.destroy');
});

//Route::resource('sizeGlasses', SizeGlassController::class);
Route::prefix('sizeGlasses')->group(function () {
    Route::get('', [SizeGlassController::class, 'index'])->name('sizeGlasses.index');
    Route::get('/create', [SizeGlassController::class, 'create'])->name('sizeGlasses.create');
    Route::post('', [SizeGlassController::class, 'store'])->name('sizeGlasses.store');
    Route::get('/{sizeGlass}/edit', [SizeGlassController::class, 'edit'])->name('sizeGlasses.edit');
    Route::put('/{sizeGlass}', [SizeGlassController::class, 'update'])->name('sizeGlasses.update');
    Route::delete('/{sizeGlass}', [SizeGlassController::class, 'destroy'])->name('sizeGlasses.destroy');
});

//Route::resource('avoidWaters', AvoidWaterController::class);
Route::prefix('avoidWaters')->group(function () {
    Route::get('', [AvoidWaterController::class, 'index'])->name('avoidWaters.index');
    Route::get('/create', [AvoidWaterController::class, 'create'])->name('avoidWaters.create');
    Route::post('', [AvoidWaterController::class, 'store'])->name('avoidWaters.store');
    Route::get('/{avoidWater}/edit', [AvoidWaterController::class, 'edit'])->name('avoidWaters.edit');
    Route::put('/{avoidWater}', [AvoidWaterController::class, 'update'])->name('avoidWaters.update');
    Route::delete('/{avoidWater}', [AvoidWaterController::class, 'destroy'])->name('avoidWaters.destroy');
});

//Route::resource('sizeStraps', SizeStrapController::class);
Route::prefix('sizeStraps')->group(function () {
    Route::get('', [SizeStrapController::class, 'index'])->name('sizeStraps.index');
    Route::get('/create', [SizeStrapController::class, 'create'])->name('sizeStraps.create');
    Route::post('', [SizeStrapController::class, 'store'])->name('sizeStraps.store');
    Route::get('/{sizeStrap}/edit', [SizeStrapController::class, 'edit'])->name('sizeStraps.edit');
    Route::put('/{sizeStrap}', [SizeStrapController::class, 'update'])->name('sizeStraps.update');
    Route::delete('/{sizeStrap}', [SizeStrapController::class, 'destroy'])->name('sizeStraps.destroy');
});

//Route::resource('materialStraps', MaterialStrapController::class);
Route::prefix('materialStraps')->group(function () {
    Route::get('', [MaterialStrapController::class, 'index'])->name('materialStraps.index');
    Route::get('/create', [MaterialStrapController::class, 'create'])->name('materialStraps.create');
    Route::post('', [MaterialStrapController::class, 'store'])->name('materialStraps.store');
    Route::get('/{materialStrap}/edit', [MaterialStrapController::class, 'edit'])->name('materialStraps.edit');
    Route::put('/{materialStrap}', [MaterialStrapController::class, 'update'])->name('materialStraps.update');
    Route::delete('/{materialStrap}', [MaterialStrapController::class, 'destroy'])->name('materialStraps.destroy');
});

// Route::resource('watches', WatchController::class);
Route::get('watches', [WatchController::class, 'index'])->name('watches.index'); // Hiển thị danh sách đồng hồ
Route::get('watches/create', [WatchController::class, 'create'])->name('watches.create'); // Hiển thị form thêm đồng hồ mới
Route::post('watches', [WatchController::class, 'store'])->name('watches.store'); // Lưu đồng hồ mới vào cơ sở dữ liệu
Route::get('watches/{watch}/edit', [WatchController::class, 'edit'])->name('watches.edit'); // Hiển thị form chỉnh sửa đồng hồ
Route::put('watches/{watch}', [WatchController::class, 'update'])->name('watches.update'); // Cập nhật thông tin đồng hồ
Route::delete('watches/{watch}', [WatchController::class, 'destroy'])->name('watches.destroy'); // Xóa đồng hồ

// Route::resource('paymentMethods', PaymentMethodController::class);
Route::prefix('paymentMethods')->group(function () {
    Route::get('', [PaymentMethodController::class, 'index'])->name('paymentMethods.index');
    Route::get('/create', [PaymentMethodController::class, 'create'])->name('paymentMethods.create');
    Route::post('', [PaymentMethodController::class, 'store'])->name('paymentMethods.store');
    Route::get('/{paymentMethod}/edit', [PaymentMethodController::class, 'edit'])->name('paymentMethods.edit');
    Route::put('/{paymentMethod}', [PaymentMethodController::class, 'update'])->name('paymentMethods.update');
    Route::delete('/{paymentMethod}', [PaymentMethodController::class, 'destroy'])->name('paymentMethods.destroy');
});

// Route::resource('users', UserController::class);
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // AJAX routes
    Route::get('/get-districts/{city_id}', [UserController::class, 'getDistricts'])->name('users.getDistricts');
    Route::get('/get-wards/{district_id}', [UserController::class, 'getWards'])->name('users.getWards');
});

// Route::resource('cities', CityController::class);
Route::prefix('cities')->group(function () {
    Route::get('/', [CityController::class, 'index'])->name('cities.index');
    Route::get('/create', [CityController::class, 'create'])->name('cities.create');
    Route::post('/', [CityController::class, 'store'])->name('cities.store');
    Route::get('/{city}', [CityController::class, 'show'])->name('cities.show');
    Route::get('/{city}/edit', [CityController::class, 'edit'])->name('cities.edit');
    Route::put('/{city}', [CityController::class, 'update'])->name('cities.update');
    Route::delete('/{city}', [CityController::class, 'destroy'])->name('cities.destroy');
});


// Route::resource('districts', DistrictController::class);
Route::prefix('districts')->group(function () {
    Route::get('/', [DistrictController::class, 'index'])->name('districts.index');
    Route::get('/create', [DistrictController::class, 'create'])->name('districts.create');
    Route::post('/', [DistrictController::class, 'store'])->name('districts.store');
    Route::get('/{district}', [DistrictController::class, 'show'])->name('districts.show');
    Route::get('/{district}/edit', [DistrictController::class, 'edit'])->name('districts.edit');
    Route::put('/{district}', [DistrictController::class, 'update'])->name('districts.update');
    Route::delete('/{district}', [DistrictController::class, 'destroy'])->name('districts.destroy');
});

// Route::resource('wards', WardController::class);
Route::prefix('wards')->group(function () {
    Route::get('/', [WardController::class, 'index'])->name('wards.index');
    Route::get('/create', [WardController::class, 'create'])->name('wards.create');
    Route::post('/', [WardController::class, 'store'])->name('wards.store');
    Route::get('/{ward}', [WardController::class, 'show'])->name('wards.show');
    Route::get('/{ward}/edit', [WardController::class, 'edit'])->name('wards.edit');
    Route::put('/{ward}', [WardController::class, 'update'])->name('wards.update');
    Route::delete('/{ward}', [WardController::class, 'destroy'])->name('wards.destroy');
});