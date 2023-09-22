<?php

use App\Http\Controllers\AdminController;
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
Route::get('/home', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/all-companies', [AdminController::class, 'showCompanies'])->middleware('auth');
Route::get('/admin/all-employees', [AdminController::class, 'showEmployees'])->middleware('auth');

//company forms
Route::get('companies/all', [CompanyController::class, 'show'])->middleware('auth');
Route::get('create-company', [CompanyController::class, 'create'])->middleware('auth');
Route::post('create-company', [CompanyController::class, 'store'])->middleware('auth');
Route::get('companies/edit/{company:id}', [CompanyController::class, 'edit'])->middleware('auth');
Route::patch('companies/edit/{company:id}', [CompanyController::class, 'update'])->middleware('auth');
Route::delete('companies/edit/{company:id}', [CompanyController::class, 'destroy'])->middleware('auth');

//employee forms
Route::get('employee/create', [EmployeeController::class, 'create'])->middleware('auth');
Route::post('employee/create', [EmployeeController::class, 'store'])->middleware('auth');
Route::get('employee/edit/{employee:id}', [EmployeeController::class, 'edit'])->middleware('auth');
Route::patch('employee/edit/{employee:id}', [EmployeeController::class, 'update'])->middleware('auth');
Route::delete('employee/edit/{employee:id}', [EmployeeController::class, 'destroy'])->middleware('auth');



//see company edit info 
Route::get('company/{company:name}', [CompanyController::class, 'show'])->middleware('auth');


