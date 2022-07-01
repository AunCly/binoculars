<?php

use Auncly\Binoculars\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/test', function(){
//    $colors = DB::table('colors')->get();
//    dd($colors);
//});

Route::prefix('/binoculars')->group(function(){
    Route::get('/{view?}', [HomeController::class, 'index'])->where('view', '(.*)')->name('binoculars');
});
