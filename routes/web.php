<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $user = [];
    $username = 'Amit';
    return view('welcome', compact('user'));
});