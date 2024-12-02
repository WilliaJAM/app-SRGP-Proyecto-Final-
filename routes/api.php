<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DetailOfTheSaleController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserTableController;
// use Faker\Provider\ar_EG\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('/category/get','get');
    Route::post('/category/save','save');
    Route::put('/category/update','update');
    Route::delete('/category/delete','delete');
});

Route::controller(CitiesController::class)->group(function(){
    Route::get('/city/get','get');
    Route::post('/city/save','save');
    Route::put('/city/update','update');
    Route::delete('/city/delete','delete');
});

Route::controller(CountriesController::class)->group(function(){
    Route::get('/country/get','get');
    Route::post('/country/save','save');
    Route::put('/country/update','update');
    Route::delete('/country/delete','delete');
});

Route::controller(CustomerController::class)->group(function(){
    Route::get('/customer/get','get');
    Route::post('/customer/save','save');
    Route::put('/customer/update','update');
    Route::delete('/customer/delete','delete');
});

Route::controller(DepartmentController::class)->group(function(){
    Route::get('/department/get','get');
    Route::post('/department/save','save');
    Route::put('/department/update','update');
    Route::delete('/department/delete','delete');
});

Route::controller(DetailOfTheSaleController::class)->group(function(){
    Route::get('/details/get','get');
    Route::post('/details/save','save');
    Route::put('/details/update','update');
    Route::delete('/details/delete','delete');
});

Route::controller(InventoryController::class)->group(function(){
    Route::get('/invetory/get','get');
    Route::post('/invetory/save','save');
    Route::put('/invetory/update','update');
    Route::delete('/invetory/delete','delete');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/product/get','get');
    Route::post('/product/save','save');
    Route::put('/product/update','update');
    Route::delete('/product/delete','delete');
});

Route::controller(RolController::class)->group(function(){
    Route::get('/rol/get','get');
    Route::post('/rol/save','save');
    Route::put('/rol/update','update');
    Route::delete('/rol/delete','delete');
});

Route::controller(SaleController::class)->group(function(){
    Route::get('/sale/get','get');
    Route::post('/sale/save','save');
    Route::put('/sale/update','update');
    Route::delete('/sale/delete','delete');
});

Route::controller(SupplierController::class)->group(function(){
    Route::get('/supplier/get','get');
    Route::post('/supplier/save','save');
    Route::put('/supplier/update','update');
    Route::delete('/supplier/delete','delete');
});

Route::controller(UserTableController::class)->group(function(){
    Route::get('/user/get','get');
    Route::post('/user/save','save');
    Route::put('/user/update','update');
    Route::delete('/user/delete','delete');
});

