<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesItemController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'home']);
Route::get('/toCustomer',[HomeController::class,'toCustomer']);
Route::get('/UpdateCustomer/{id}',[HomeController::class,'toUpdateCustomer']);
Route::get('/UpdateItem/{id}',[HomeController::class,'toUpdateItem']);
Route::get('/toItem',[HomeController::class,'toItem']);
Route::get('/toSales',[HomeController::class,'toSales']);
Route::get('/toSaleItem/{id}',[HomeController::class,'toSaleItem']);
Route::get('/toUpdateSale/{id}',[HomeController::class,'toUpdateSale']);
Route::get('/Sale/addMore/{id}',[HomeController::class,'toAddMore']);
Route::get('/itemSale/update/{notaId}/{itemId}',[HomeController::class,'toUpdateItemsale']);


//USER CONTROLLER
Route::post('/createCustomer',[CustomerController::class,'createCustomer']);
Route::post('/Customer/update/{id}',[CustomerController::class,'updateCustomer']);
Route::get('/Customer/delete/{id}',[CustomerController::class,'deleteCustomer']);

//ITEM CONTROLLER
Route::post('/createItem',[ItemController::class,'createItem']);
Route::post('/Item/update/{id}',[ItemController::class,'updateItem']);
Route::get('/Item/delete/{id}',[ItemController::class,'deleteItem']);

//SALE CONTROLLER
Route::post('/createSale',[SalesController::class,'createSale']);
Route::post('/Sale/addMore/{id}',[SalesController::class,'addMoreItem']);
Route::get('/Sale/delete/{id}',[SalesController::class,'deleteSale']);
Route::post('/Sale/update/{id}',[SalesController::class,'updateSale']);

//Sale Item Controller
Route::post('/saleItem/update/{notaId}/{itemId}',[SalesItemController::class,'updateItemSale']);
Route::get('/saleItem/delete/{notaId}/{itemId}',[SalesItemController::class,'deleteItemSale']);



