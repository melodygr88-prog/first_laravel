<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page1', function () {
    return view('page1');
});
Route::get('/page2', function () {
    return view('page2');
});
Route::get('/page3', function () {
    return view('page3');
});