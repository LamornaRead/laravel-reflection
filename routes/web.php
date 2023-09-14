<?php

use App\Models\Company;
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
Route::get('/', function () { return view('companies', ['companies' => Company::all()]);});

//a single view for a single company
//need to add a connection to a list of employees for that single company
Route::get('company/{company:name}', function (Company $company) {  return view('company', [ 'company' => $company]);});

Auth::routes();

//admin access to a dashboard that only admins can see
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
