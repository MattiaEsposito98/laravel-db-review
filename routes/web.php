<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    $contact = ['Mattia', 'Genny', 'Emanuele', 'Andrea', 'Pippo', 'Luigi'];
    return view('pages.contact', compact('contact'));
})->name('contact');
