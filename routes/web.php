<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/location', function () {
    return view('location');
})->name('location');

Route::get('/accommodation', function () {
    return view('accommodation');
})->name('accommodation');

Route::get('/experiences', function () {
    return view('experiences');
})->name('experiences');

Route::get('/experience/{slug}', function (string $slug) {
    $experiences = config('experiences');
    
    if (!isset($experiences[$slug])) {
        abort(404);
    }
    
    return view('experience', ['item' => $experiences[$slug]]);
})->name('experience');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');
});

require __DIR__.'/auth.php';
