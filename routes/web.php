<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//landing page for public
Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'store']);

Auth::routes();

//admin dashboard
Route::get('/home', [AdminController::class, 'index'])->middleware('auth')->name('home');
Route::get('/admin/all-companies', [AdminController::class, 'showCompanies'])->middleware('auth')->name('all-companies');
Route::get('/admin/all-employees', [AdminController::class, 'showEmployees'])->middleware('auth')->name('all-employees');
Route::get('/admin/employees/{company:name}', [AdminController::class, 'showEmployeesCompany'])->middleware('auth')->name('company-employees {company:name}' );
Route::get('/admin/edit/{employee:id}', [AdminController::class, 'editEmployees'])->middleware('auth');
Route::patch('/admin/edit/{employee:id}', [AdminController::class, 'updateEmployees'])->middleware('auth');
Route::delete('/admin/edit/{employee:id}', [AdminController::class, 'destroyEmployees'])->middleware('auth');

//company forms
Route::get('companies/create', [CompanyController::class, 'create'])->middleware('auth')->name('create-company');
Route::post('companies/create', [CompanyController::class, 'store'])->middleware('auth');
Route::get('companies/edit/{company:id}', [CompanyController::class, 'edit'])->middleware('auth');
Route::patch('companies/edit/{company:id}', [CompanyController::class, 'update'])->middleware('auth');
Route::delete('companies/edit/{company:id}', [CompanyController::class, 'destroy'])->middleware('auth');

//employee forms
Route::get('employee/create', [EmployeeController::class, 'create'])->middleware('auth')->name('create-employee');
Route::post('employee/create', [EmployeeController::class, 'store'])->middleware('auth');
Route::get('employee/edit/{employee:id}', [EmployeeController::class, 'edit'])->middleware('auth');
Route::patch('employee/edit/{employee:id}', [EmployeeController::class, 'update'])->middleware('auth');
Route::delete('employee/edit/{employee:id}', [EmployeeController::class, 'destroy'])->middleware('auth');


//see company info 
Route::get('company/{company:name}', [CompanyController::class, 'show'])->middleware('auth');


