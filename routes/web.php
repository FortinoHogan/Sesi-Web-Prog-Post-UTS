<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth', 'CekRole:user'])->group(function () {
    // page user
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::get('/', function () {
        return view('layouts.master');
    });
});

Route::middleware(['auth', 'CekRole:admin'])->group(function () {
    // page admin
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::get('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('set-locale');

Auth::routes();
