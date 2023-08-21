<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::view('/employees/add','employees');

Route::post('/employees/new',[App\Http\Controllers\EmployeesController::class,'new']);

Route::view('/departemnts/add','departemnts');

Route::post('/departemnts/newdep',[App\Http\Controllers\DepartemntsController::class,'newdep']);

Route::get('/departemnts',[App\Http\Controllers\DepartemntsController::class,'departemnts']);

Route::get('/employees',[App\Http\Controllers\EmployeesController::class,'employees']);

Route::get('/employees/search',[App\Http\Controllers\EmployeesController::class,'searchEmploy']);

Route::get('/departemnt/search',[App\Http\Controllers\DepartemntsController::class,'searchDepartemnt']);