<?php

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/preguntas-frecuentes', function(){
    return view('front.faqs');
})->name('faqs');

Route::get('/contacto', function(){
    return view('front.contact');
})->name('contact');

Route::get('/productos', function(){
    return view('front.eshop');
})->name('eshop');

Route::get('/carrito', function(){
    return view('front.cart');
})->name('shopping-cart');
