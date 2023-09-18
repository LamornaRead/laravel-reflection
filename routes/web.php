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

//landing page showing all companies
Route::get('/', [CompanyController::class, 'index']);

//a single view for a single company
Route::get('company/{company:name}', [CompanyController::class, 'show']);


Auth::routes();

//admin access to a dashboard that only admins can see

//admin dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//create company form
Route::get('create-company', [CompanyController::class, 'create'])->middleware('auth');

//create employee form
Route::get('create-employee', [EmployeeController::class, 'create'])->middleware('auth');

//see all company files page
Route::get('/admin', [HomeController::class, 'allFiles'])->name('admin');

//see company edit page
Route::get('edit-files/{company:name}', [HomeController::class, 'edit'])->middleware('auth');

