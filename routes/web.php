<?php

use App\Http\Controllers\CompanyController;
use App\Models\Company;
use App\Models\Employee;
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
Route::get('/create-company', [App\Http\Controllers\HomeController::class, 'createCompany'])->name('create-company');
Route::get('/create-employee', [App\Http\Controllers\HomeController::class, 'createEmployee'])->name('create-employee');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'allFiles'])->name('admin');
Route::get('edit-files/{company:name}', function (Company $company) {  return view('edit-files', [ 'company' => $company]);})->middleware('auth');
