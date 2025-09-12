<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/imprensa', function () {
    return view('imprensa');
});

Route::get('/merch', function () {
    return view('merch');
});

Route::get('/apoie', function () {
    return view('apoie');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/contato', function () {
    return view('contato');
});
