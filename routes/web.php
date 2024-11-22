<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', function () {
    return view('index');
});

Route::get('/menu', function(){
    return view('menu');
});