<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('shares', 'ShareController');

Route::get('docs', function(){
    return View::make('docs.api.v1.index');
});