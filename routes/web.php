<?php

Route::get('/','CreatesController@home');

Route::get('/create', function(){

    return view('create');
    
});

Route::post('/insert','CreatesController@add');
Route::get('/update/{id}','CreatesController@update');
Route::get('/edit/{id}','CreatesController@edit');
