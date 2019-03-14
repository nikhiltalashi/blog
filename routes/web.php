<?php

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('customers', function () {
    
    $customers = [
        'John',
        'Alex',
        'Sam'
    ];
    
    return view('internals.customers',[
        'customers' => $customers
    ]);
});

