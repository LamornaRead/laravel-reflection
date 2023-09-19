<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

//landing page for public
Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'store']);

Auth::routes();

//admin access to a dashboard that only admins can see

//admin dashboard
Route::get('/home', [CompanyController::class, 'index'])->middleware('auth');

//create company form
Route::get('create-company', [CompanyController::class, 'create'])->middleware('auth');
Route::post('create-company', [CompanyController::class, 'store'])->middleware('auth');

//create employee form
Route::get('create-employee', [EmployeeController::class, 'create'])->middleware('auth');
Route::post('create-employee', [EmployeeController::class, 'store'])->middleware('auth');


//see company edit page
Route::get('company/{company:name}', [CompanyController::class, 'show'])->middleware('auth');


