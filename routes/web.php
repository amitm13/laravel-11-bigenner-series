<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $formName = 'Details form';
    // return view('welcome', compact('formName'));
    return view('welcome', ['value1'=>$formName]);
});

Route::post('/submit', function (Request $request){
    return 'Hello '.$request->username;
});