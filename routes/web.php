<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::view('about-us','about');
Route::view('services','services');
Route::view('cars/sedan','cars.sedan');
Route::view('sedan1','sedan1');
Route::view('sedan2','sedan2');
Route::view('sedan3','sedan3');
// Route::view('sedan4','sedan4');
// Route::view('sedan5','sedan5');
// Route::view('sedan6','sedan6');
Route::view('cars/suv','cars.suv');
Route::view('suv1','suv1');
Route::view('suv2','suv2');
Route::view('suv3','suv3');
Route::view('cars/hatchback','cars.hatchback');
Route::view('hatchback1','hatchback1');
Route::view('hatchback2','hatchback2');
Route::view('hatchback3','hatchback3');
// Route::view('cars/kn','cars.kn');
Route::view('gallery','gallery');
Route::view('contact','contact');
// Route::view('contact2','contact2');
// Route::view('tour-package','tour-package');
// Route::view('outstationtrip','outstationtrip');
// Route::view('bookingpage-1','bookingpage-1');
// Route::view('bookingpage-submit','bookingpage-submit');
// Route::view('bookingpage-success','bookingpage-success');
// Route::view('rate-card','rate-card');


