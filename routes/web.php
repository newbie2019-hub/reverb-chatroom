<?php

use App\Livewire\Chat\Pages\RoomShow;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/chat/{room:slug}', RoomShow::class)
    ->middleware(['auth']);

require __DIR__ . '/auth.php';
