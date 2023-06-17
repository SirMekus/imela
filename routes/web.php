<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => config('imela.middleware', ['web'])], function () {
    Route::post('change-email', [App\Http\Controllers\Auth\EmailFactory::class, 'changeEmailPost']);
    
    Route::get('change-email/confirmation', [App\Http\Controllers\Auth\EmailFactory::class, 'confirmChangeEmailLink'])->middleware(['signed'])->name('change-email.verify');
});