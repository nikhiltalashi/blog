<?php

Route::get('/','CreatesController@home');

Route::get('/create', function(){

    return view('create');
    
});

Route::get('/insert', function(){

    return "add";
    
});

//Route::post('/insert','CreatesController@add');
