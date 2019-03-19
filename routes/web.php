<?php

Route::get('/','CreatesController@home');

Route::get('/create', function(){

    return view('create');
    
});

Route::post('/insert','CreatesController@add');
