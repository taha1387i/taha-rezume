<?php

use Illuminate\Support\Facades\Route;

Route::get('/rezome/taha', function () {
    return view('taha-rezome-fa');
})->name('rezome-taha');

Route::get('/rezome/taha/fa', function () {
    return view('taha-rezome-fa');
})->name('home-fa');

Route::get('/Rezome/Taha', function () {
    return view('taha-rezome-en');
})->name('rezome-taha-en');

Route::get('/rezome/taha/en', function () {
    return view('taha-rezome-en');
})->name('home-en');


Route::prefix('/my/rezome/fa')->group(function() {
    Route::get('/about', function () {
        return view('aboutme-fa');
    })-> name('about-fa');

    Route::get('/services', function () {
        return view('services-fa');
    })-> name('services-fa');

    Route::get('/example/of/work', function () {
        return view('example-fa');
    })-> name('example-fa');

    Route::get('/contact/me', function () {
        return view('contact-fa');
    })-> name('contact-fa');
});


Route::prefix('rezome/taha/en')->group(function () {
    Route::get('/About', function () {
        return view('aboutme-en');
    })-> name('about-en');

    Route::get('/Services', function () {
        return view('services-en');
    })-> name('services-en');

    Route::get('/Example/of/Work', function () {
        return view('example-en');
    })-> name('example-en');

    Route::get('/Contact/Me', function () {
        return view('contact-en');
    })-> name('contact-en');
});
