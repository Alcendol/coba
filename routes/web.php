<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/aboutUs', function() {
    return view('aboutUs');
});

Route::get('/article', function() {
    return view('article');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/test', function() {
    return view('test');
}) -> name('test');

Route::get('/upload-foto', [ImageController::class, 'showImageUpload']) -> name('upload-foto');

Route::post('/upload-pas-foto', [ImageController::class, 'upload']);
Route::post('/register', [RegisterController::class, 'register']);