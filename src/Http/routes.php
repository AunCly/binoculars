<?php

use Auncly\Binoculars\Http\Controllers\HomeController;
use Auncly\Binoculars\Http\Controllers\TableController;
use Auncly\Binoculars\Http\Controllers\TableDetailsController;
use Auncly\Binoculars\Http\Controllers\TableStructureController;
use Illuminate\Support\Facades\Route;

Route::prefix('binoculars')->group(function(){
    Route::get('/{view?}', [HomeController::class, 'index'])->where('view', '(.*)')->name('binoculars');
});

Route::prefix('api/binoculars')->group(function(){
    Route::get('/tables', TableController::class)->name('tables');
    Route::get('/tables/{table}', TableDetailsController::class)->name('tables.details');
    Route::get('/tables/{table}/structure', TableStructureController::class)->name('tables.details.structure');
});
