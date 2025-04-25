<?php

use App\Http\Controllers\WireframeController;
use Illuminate\Support\Facades\Route;

Route::controller(WireframeController::class)
    ->prefix('wireframe')
    ->group(function () {
        Route::get('/home', 'home');
    }
);