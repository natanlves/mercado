<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.template');
});
Route::get('/e', function () {
    return view('produtos.eletrodomesticos');
});