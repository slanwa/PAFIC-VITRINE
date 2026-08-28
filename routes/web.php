<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('accueil');
})->name('accueil');


Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');


Route::get('/services', function () {
    return view('services');
})->name('services');
// Route::inertia('/', 'Welcome')->name('home');

// Route::prefix('{current_team}')
//     ->middleware(['auth', 'verified', EnsureTeamMembership::class])
//     ->group(function () {
//         Route::get('dashboard', DashboardController::class)->name('dashboard');
//     });

// Route::middleware(['auth'])->group(function () {
//     Route::post('invitations/{invitation}/accept', [TeamInvitationController::class, 'accept'])->name('invitations.accept');
//     Route::delete('invitations/{invitation}', [TeamInvitationController::class, 'decline'])->name('invitations.decline');
// });

require __DIR__.'/settings.php';
