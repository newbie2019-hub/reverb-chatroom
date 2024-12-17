<?php

use App\Livewire\Chat\Index;
use App\Livewire\Chat\Pages\RoomShow;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/chat/{room:slug}', RoomShow::class)
    ->middleware(['auth'])
    ->name('chat.room');

Route::get('/chat', Index::class)
    ->middleware(['auth'])
    ->name('chat');

require __DIR__ . '/auth.php';
