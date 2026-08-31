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

use App\Http\Controllers\ContactController;

// Page de contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

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
