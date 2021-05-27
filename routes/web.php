<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});







//Administration

	Route::prefix('admin')->namespace('admin')->group(function(){
		
		//Authentication
			Route::get('/login', 'authController@login');
			Route::post('/login', 'authController@loginAttempt');
			Route::get('/logout', 'authController@logout')->name('admin.logout');

		//Middleware
			Route::middleware('adminAuth')->group(function(){
				
				Route::get('/', 'adminController@index')->name('admin.dashboard');

				//Accommodation
					Route::prefix('accommodation')->group(function(){

						Route::get('statistics', 'accommodationController@statistics')->name('admin.accommodation.statistics');

						//Listings
							Route::prefix('listing')->group(function(){
								
								Route::get('pending', 'accommodationController@pendingListing')->name('admin.accommodation.listing.pending');
								Route::get('published', 'accommodationController@publishedListing')->name('admin.accommodation.listing.published');
								Route::get('rejected', 'accommodationController@rejectedListing')->name('admin.accommodation.listing.rejected');

								Route::get('details', 'accommodationController@detailListting')->name('admin.accommodation.listing.details');
							});

						//Bookings
							Route::prefix('booking')->group(function(){

								Route::get('pending', 'accommodationController@pendingBooking')->name('admin.accommodation.booking.pending');
								Route::get('completed', 'accommodationController@completedBooking')->name('admin.accommodation.booking.completed');
								Route::get('cancelled', 'accommodationController@cancelledBooking')->name('admin.accommodation.booking.cancelled');
							});

						//Members
							Route::prefix('members')->group(function(){

								Route::get('pending', 'accommodationController@pendingMembers')->name('admin.accommodation.members.pending');
								Route::get('approved', 'accommodationController@approvedMembers')->name('admin.accommodation.members.approved');
								Route::get('rejected', 'accommodationController@rejectedMembers')->name('admin.accommodation.members.rejected');

								Route::get('profile', 'accommodationController@profileMembers')->name('admin.accommodation.members.profile');
							});	

						//Inquiries
							Route::prefix('inquiries')->group(function(){

								Route::get('/', 'accommodationController@inquiries')->name('admin.accommodation.inquiries');
							});
					});

			});

	});
