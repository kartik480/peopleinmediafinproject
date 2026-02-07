<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/our-services', function () {
    return view('services');
});

Route::get('/become-a-member', function () {
    return view('member');
});

Route::get('/privacy-policy', function () {
    return view('privacy');
});

Route::get('/terms-and-conditions', function () {
    return view('terms');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/apply-for-loan', function () {
    return view('apply');
});

Route::get('/small-trader-loans', function () {
    return view('small-trader-loans');
});

Route::get('/daily-collection-loans', function () {
    return view('daily-collection-loans');
});

Route::get('/group-personal-loans', function () {
    return view('group-personal-loans');
});

Route::get('/consumer-durable-loans', function () {
    return view('consumer-durable-loans');
});
