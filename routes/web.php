<?php

$namespace = 'SanderVanHooft\ContactForm\Http\Controllers';

Route::middleware('web')->group(function () use ($namespace) {
    Route::name(config('contactform.route_create.name'))->get(config('contactform.route_create.url'), $namespace . '\ContactFormController@create');

    Route::name(config('contactform.route_store.name'))->post(config('contactform.route_store.url'), $namespace . '\ContactFormController@store');
});
