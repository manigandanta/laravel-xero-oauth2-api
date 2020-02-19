<?php

use \Illuminate\Support\Facades\Route;
use \Manigandanta\Xero\Controllers\AuthorizationController;
use \Manigandanta\Xero\Controllers\AuthorizationCallbackController;

Route::middleware('web')->group(function() {
    Route::get('/xero/auth/authorize', AuthorizationController::class)->name('xero.auth.authorize');
    Route::get('/xero/auth/callback', AuthorizationCallbackController::class)->name('xero.auth.callback');
});
