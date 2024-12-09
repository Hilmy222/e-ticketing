<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventOrganizerController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\ManageEventController;
use App\Http\Controllers\ParticipantsController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Operator;

    // Route::get('/', function () {
    //     return view('login');
    // });

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/admin/EO', [EventOrganizerController::class, 'index'])->name('events-organizer.index');
Route::get('/admin/EO/create', [EventOrganizerController::class, 'create'])->name('events-organizer.create');
Route::get('/admin/EO/detail', [EventOrganizerController::class, 'show'])->name('events-organizer.show');

Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index');
Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
Route::get('/operator/detail', [OperatorController::class, 'show'])->name('operator.show');

Route::get('/participants', [ParticipantsController::class, 'index'])->name('participants.index');
Route::get('/participants/create', [ParticipantsController::class, 'create'])->name('participants.create');
Route::get('/participants/detail', [ParticipantsController::class, 'show'])->name('participants.show');

Route::get('/event', [ManageEventController::class, 'index'])->name('manage-event.index');
Route::get('/event/create/step1', [ManageEventController::class, 'createStep1'])->name('manage-event.create.step1');
Route::get('/event/create/step2', [ManageEventController::class, 'createStep2'])->name('manage-event.create.step2');
Route::get('/event/create/step3', [ManageEventController::class, 'createStep3'])->name('manage-event.create.step3');
Route::get('/event/detail', [ManageEventController::class, 'show'])->name('manage-event.show');

Route::get('/login', [EventOrganizerController::class, 'login'])->name('login');
