<?php

$namespace = 'SanderVanHooft\ContactForm\Http\Controllers';

Route::middleware('web')->group(function () use ($namespace) {
    Route::name(config('contactform.route_create_name'))->get(config('contactform.route_create_url'), $namespace . '\ContactFormController@create');

    Route::name(config('contactform.route_store_name'))->post(config('contactform.route_store_url'), $namespace . '\ContactFormController@store');
});
