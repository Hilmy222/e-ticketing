<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventOrganizerController;
use App\Http\Controllers\OperatorController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Operator;

    // Route::get('/', function () {
    //     return view('login');
    // });

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/EO', [EventOrganizerController::class, 'index'])->name('eo.index');
Route::get('/EO/create', [EventOrganizerController::class, 'create'])->name('eo.create');
Route::get('/EO/show', [EventOrganizerController::class, 'show'])->name('eo.show');
Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index');
Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
Route::get('/operator/show', [OperatorController::class, 'show'])->name('operator.show');
Route::get('/login', [EventOrganizerController::class, 'login'])->name('login');
