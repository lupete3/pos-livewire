<?php

use App\Livewire\Home;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Profile;
use App\Livewire\Menu\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', Home::class)->name('home');

    Route::get('/profile', Profile::class)->name('profile');

    Route::get('/menu', Index::class)->name('menu.index');

    Route::get('/customer', \App\Livewire\Customer\Index::class)->name('customer.index');

    // Route::get('/transactions', \App\Livewire\Transaction\Index::class)->name('transaction.index');

    // Route::get('/transaction/create', \App\Livewire\Transaction\Actions::class)->name('transaction.create');

    // Route::get('/transaction/export', \App\Livewire\Transaction\Export::class)->name('transaction.export');

    // Route::get('/transaction/{transaction}/edit', \App\Livewire\Transaction\Actions::class)->name('transaction.edit');

    // Route::get('/transaction/{transaction}/imprimer', \App\Livewire\Transaction\Impression::class)->name('transaction.imprimer');


});

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
});
