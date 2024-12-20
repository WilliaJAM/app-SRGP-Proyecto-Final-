<?php
use App\Http\Controllers\AddressController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\CardTypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DetailOfTheSaleController;
use App\Http\Controllers\InternationalBrandController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PaymentMethodsController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SupplierProductController;
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

Route::controller(AddressController::class)->group(function(){
    Route::get('/adress/get', 'get');
    Route::post('/adress/save', 'save');
    Route::put('/adress/update', 'update');
    Route::delete('/adress/delete', 'delete');
});

Route::controller(BankController::class)->group(function(){
    Route::get('/bank/get', 'get');
    Route::post('/bank/save', 'save');
    Route::put('/bank/update', 'update');
    Route::delete('/bank/delete', 'delete');
    
});

Route::controller(CardsController::class)->group(function(){
    Route::get('/card/get', 'get');
    Route::post('/card/save', 'save');
    Route::put('/card/update', 'update');
    Route::delete('/card/delete', 'delete');
    
});

Route::controller(CardTypeController::class)->group(function(){
    Route::get('/card-type/get', 'get');
    Route::post('/card-type/save', 'save');
    Route::put('/card-type/update', 'update');
    Route::delete('/card-type/delete', 'delete');
    
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

Route::controller(InternationalBrandController::class)->group(function(){
    Route::get('/international-brand/get','get');
    Route::post('/international-brand/save','save');
    Route::put('/international-brand/update','update');
    Route::delete('/international-brand/delete','delete');
});

Route::controller(InventoryController::class)->group(function(){
    Route::get('/invetory/get','get');
    Route::post('/invetory/save','save');
    Route::put('/invetory/update','update');
    Route::delete('/invetory/delete','delete');
});

Route::controller(PaymentMethodsController::class)->group(function(){
    Route::get('/payment/get','get');
    Route::post('/payment/save','save');
    Route::put('/payment/update','update');
    Route::delete('/payment/delete','delete');
});

Route::controller(PhoneController::class)->group(function(){
    Route::get('/phone/get','get');
    Route::post('/phone/save','save');
    Route::put('/phone/update','update');
    Route::delete('/phone/delete','delete');
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

Route::controller(SupplierProductController::class)->group(function(){
    Route::get('/supplier-product/get','get');
    Route::post('/supplier-product/save','save');
    Route::put('/supplier-product/update','update');
    Route::delete('/supplier-product/delete','delete');
});

Route::controller(UserTableController::class)->group(function(){
    Route::get('/user/get','get');
    Route::post('/user/save','save');
    Route::put('/user/update','update');
    Route::delete('/user/delete','delete');
});

