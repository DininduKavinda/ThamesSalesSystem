<?php

use App\Http\Controllers\SalesExecetiveController;
use App\Http\Controllers\TestController;
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

Route::get('/Invoices', [TestController::class, 'index'])->name('Thames.Invoices');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::prefix('SalesExecutive')->group(function () {
    Route::controller(SalesExecetiveController::class)->group(function () {
        Route::get('/DashBoard', 'DashBoard')->name('SalesExecetive.Dashboard');
        Route::get('/DailyReportForm', 'DailyReportForm')->name('SalesExecetive.DailyReportForm');
    });
});

Route::fallback(function () {
    return view('404');
});
