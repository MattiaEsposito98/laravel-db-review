<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index'])->name('homepage');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    $contacts = ['Mattia', 'Genny', 'Emanuele', 'Andrea', 'Pippo', 'Luigi'];
    return view('pages.contact', compact('contacts'));
})->name('contact');

// Route::resource('/posts', ClientController::class);
