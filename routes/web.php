<?php

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

Route::get('/', function () {
    return view('companies');
});

Route::get('company/{company}', function ($slug) {

    if (! file_exists($path = __DIR__ . "/../resources/companies/{$slug}.html")) {
        return redirect('/');
    }

    $company = cache()->remember("company.{$slug}", 1200, fn() => file_get_contents($path));

    return view('company', [ 'company' => $company]);
    
})->where('company', '[A-z_\-]+');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
