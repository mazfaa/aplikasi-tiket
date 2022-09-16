<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CustomerTicketCheckController;

Route::resource('/', TicketController::class);
Route::get('/ticket', [TicketController::class, 'create']);
Route::get('ticket-check', [CustomerTicketCheckController::class, 'index']);
Route::post('ticket-check', [CustomerTicketCheckController::class, 'store'])->name('ticket-check');

// Route::middleware('auth')->group(function () {
	Route::get('/admin', [AdminController::class, 'index']);
	Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
	Route::put('/admin/{id}', [AdminController::class, 'update']);
	Route::delete('/admin/{id}', [AdminController::class, 'destroy']);

	Route::get('/check', [CheckController::class, 'index']);
	Route::post('check', [CheckController::class, 'store'])->name('check');

	Route::post('logout', LogoutController::class)->name('logout');
// });

// Route::middleware('guest')->group(function () {
	Route::get('login', [LoginController::class, 'index'])->name('login');
	Route::post('login', [LoginController::class, 'store']);
// });

Route::get('report', ReportController::class)->name('report');
Route::get('report/export/', [ReportController::class, 'export'])->name('report');