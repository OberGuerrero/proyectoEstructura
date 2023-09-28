<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

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

Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/materials', 'MaterialController@index')->name('materials');
Route::get('/employees', 'EmployeeController@index')->name('employees');
Route::get('/inventories', 'InventoryController@index')->name('inventories');
Route::get('/orders', 'OrderController@index')->name('orders');

// Route::resource('materials', MaterialController::class);
// Route::resource('employees', EmployeeController::class);
// Route::resource('inventories', InventoryController::class);
// Route::resource('orders', OrderController::class);
// Route::resource('user', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
