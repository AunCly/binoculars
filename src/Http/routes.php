<?php

use Auncly\Binoculars\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/{view?}', [HomeController::class, 'index'])->where('view', '(.*)')->name('binoculars');
