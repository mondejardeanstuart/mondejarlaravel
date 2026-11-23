<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('/home', function() {
    $name = "Dean Stuart Mondejar";
    return view('home', compact('name'));
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/about', function() {
    $age = "19";
    return view('about', compact('age'));
});