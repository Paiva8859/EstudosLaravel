<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/meu-model-view', function () {
    return view('meu-model-view');
});