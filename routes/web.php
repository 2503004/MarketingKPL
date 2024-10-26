<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

Route::get('/', function () {
    return view('main');
});
Route::get('/newsletter', function () {
    return view('emails.newsletter');
});

Route::post('/send-newsletter', [NewsletterController::class, 'sendNewsletter'])->name('sendemailroute');
