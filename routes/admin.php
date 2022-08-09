<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' =>'admin'
],function(){
    //Dashboard
    Route::get('dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    //Users
    Route::resource('users', App\Http\Controllers\UserController::class);

    //Pages
    Route::resource('pages', App\Http\Controllers\PageController::class);

    //Booking
    Route::resource('bookings', App\Http\Controllers\BookingController::class);

    //Packages
    Route::resource('packages', App\Http\Controllers\PackageController::class);

    //Promotions
    Route::resource('promotions', App\Http\Controllers\PromotionController::class);

    //Accomodations
    Route::resource('accomodations', App\Http\Controllers\AccommodationController::class);

    //Dinings
    Route::resource('dinings', App\Http\Controllers\DiningController::class);

    //Experiences
    Route::resource('experiences', App\Http\Controllers\ExperienceController::class);

    //Facilities
    Route::resource('facilities', App\Http\Controllers\FacilityController::class);

    //Categories
    Route::resource('categories', App\Http\Controllers\CategoryController::class);

    //Hotels
    Route::resource('hotels', App\Http\Controllers\HotelController::class);

});



