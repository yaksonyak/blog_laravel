<?php



// Route::get('', function () {
//     return view('pages/home');
// })->name('home');

// Route::get('about-us', function () {
//     return view('pages/about');
// })->name('about');

// Route::any('/', fn()=> view('pages/home'))->name('home');

// Route::any('about-us', fn()=> view('pages/about'))->name('about');

Route::view('/','pages/home')->name('home');

Route::view('/about-us','pages/about')->name('about');

Route::get('/help', function (){
    return view('pages.help');
});
