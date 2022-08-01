<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCostTypeController;
use App\Http\Controllers\AdminiCostEntryController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MaterialsProductController;
use App\Http\Controllers\ProductionManageController;
use App\Http\Controllers\ProductMakingController;
use App\Http\Controllers\ProductSaleController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UniteTypeController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/',function(){
        return view('admin.include.index');
    });
    Route::resource('customers',CustomersController::class);
    Route::resource('admin-cost',AdminCostTypeController::class);
    Route::resource('costentry',AdminiCostEntryController::class);
    Route::resource('material-to-products',MaterialsProductController::class);
    Route::resource('production-manage',ProductionManageController::class);
    Route::resource('products-making',ProductMakingController::class);
    Route::resource('products-sale',ProductSaleController::class);
    Route::resource('unit-type',UniteTypeController::class);
    Route::resource('products',ProductsController::class);

});
