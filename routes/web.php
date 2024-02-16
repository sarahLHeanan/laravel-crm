<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//remove the show route as there's no need for a show view (can see everything in list)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('companies', CompanyController::class)->except([
        'show',
    ]);    
    
    Route::resource('employees', EmployeeController::class)->except([
        'show',
    ]);
});

require __DIR__.'/auth.php';
