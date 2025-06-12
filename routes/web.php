<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index'])->name('index');
Route::get('/about', [GeneralController::class, 'about'])->name('about');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');


//Decor Category
Route::get('/decor-category/{id}', [GeneralController::class, 'singleDecorCategory'])->name('singleDecorCategory');

//Decor
Route::get('/decor/{id}', [GeneralController::class, 'singleDecor'])->name('singleDecor');

//Decor Order
Route::post('/decorOrder', [GeneralController::class, 'decorOrder'])->name('decorOrder');
Route::get('/decorOrderSuccess', [GeneralController::class, 'decorOrderSuccess'])->name('decorOrderSuccess');

//fast contact for footer
Route::post('/fast-contact', [GeneralController::class, 'fastContact'])->name('fastContact');

//contact message
Route::post('/sendMessage', [GeneralController::class, 'sendMessage'])->name('sendMessage');


