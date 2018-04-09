<?php

$namespace = 'SanderVanHooft\ContactForm\Http\Controllers';

Route::middleware('web')->group(function () use ($namespace) {
    Route::name('contactform.create')->get('/contact', $namespace . '\ContactFormController@create');

    Route::name('contactform.store')->post('/contact', $namespace . '\ContactFormController@store');
});
