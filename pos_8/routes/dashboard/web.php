<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'LaravelLocalization'::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {


        // Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
        Route::prefix('dashboard')->name('dashboard.')->group(function () {

            // Route::get('/test', );

            Route::get('/test', 'DashboardController@index');

        });//end of dashboard routes
    });


