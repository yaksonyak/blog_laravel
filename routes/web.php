<?php



Route::get('', function () {
    return view('pages/home');
})->name('home');

Route::get('about-us', function () {
    return view('pages/about');
})->name('about');
