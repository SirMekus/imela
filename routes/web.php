<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => config('imela.middleware', ['web'])], function () {
    Route::post('change-email', [Imela\Http\Controllers\EmailFactory::class, 'changeEmailPost']);
    
    Route::get('change-email/confirmation', [Imela\Http\Controllers\EmailFactory::class, 'confirmChangeEmailLink'])->middleware(['signed'])->name('change-email.verify');
});