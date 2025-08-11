<?php

use App\Http\Controllers\UrlController;

Route::get('/', [UrlController::class, 'showForm']);
Route::post('/shorten', [UrlController::class, 'shorten']);
Route::get('/{short_code}', [UrlController::class, 'redirect']);
Route::get('/admin/urls', [UrlController::class, 'adminUrls']);
Route::get('/admin', [UrlController::class, 'adminPage']);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
