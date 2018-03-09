<?php

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/faqs', function(){
    return view('front.faqs');
})->name('faqs');

Route::get('/contact', function(){
    return view('front.contact');
})->name('contact');

Route::get('/shop', function(){
    return view('front.eshop');
})->name('eshop');

Route::get('/cart', function(){
    return view('front.cart');
})->name('shopping-cart');
