<?php 
use App\Http\Livewire\Welcome;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Welcome::class)->name('dashboard');
    Route::get('/logout', Logout::class)->name('logout');
});

