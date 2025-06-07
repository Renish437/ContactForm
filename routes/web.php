<?php

use codewithren\contactform\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest','web'])->group(function () {
    
    Route::get('/contact', [ContactFormController::class, 'create']);
    Route::post('/submit/message',[ContactFormController::class, 'store'])->name('contact.store');
});