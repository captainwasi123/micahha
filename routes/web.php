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

//Website
Route::namespace('web')->group(function(){

	//User Authentication
		Route::get('/login', 'authController@login')->name('user.login');
		Route::get('/logout', 'authController@logout')->name('user.logout');
		Route::get('/register', 'authController@register')->name('user.register');

		Route::post('/login', 'authController@loginSubmit');
		Route::post('/register', 'authController@registerSubmit');

	//Web Pages
		Route::get('/', 'webController@index');


		//Accommodation
			Route::prefix('accommodation')->group(function(){

				Route::get('/', 'accommodationController@index')->name('accommodation');
				Route::get('/all', 'accommodationController@all')->name('accommodation.all');
			});
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

								Route::get('details/{id}', 'accommodationController@detailListing');
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


//landlord
	Route::prefix('landlord')->namespace('landlord')->middleware('landlordAuth')->group(function(){
		//dashboard
			Route::get('/', 'LandlordController@index')->name('landlord.dashboard');
		
		//user settings
			Route::get('/profile-edit', 'SettingsController@profile_edit')->name('user.profile.edit');
			Route::post('/profile-edit', 'SettingsController@profile_update');

			Route::get('/change-password', 'SettingsController@change_password')->name('user.change.password');
			Route::post('/change-password', 'SettingsController@update_password');
		
		//Listings
			Route::prefix('listing')->group(function(){
				
				Route::get('add', 'ListingController@add_listing')->name('landlord.listing.add');
				Route::post('add', 'ListingController@insert_listing')->name('landlord.listing.insert');
				
				Route::get('pending', 'ListingController@pending_listing')->name('landlord.listing.pending');
				Route::get('published', 'ListingController@published_listing')->name('landlord.listing.published');
				Route::get('rejected', 'ListingController@rejected_listing')->name('landlord.listing.rejected');

				Route::get('listing/details', 'ListingController@listing_details')->name('landlord.listing.details');

				Route::get('reservation', 'ListingController@reservation')->name('landlord.listing.reservation');
			});

		//reservation
			Route::prefix('reservation')->group(function(){
				
				Route::get('add', 'ReservationController@add')->name('landlord.reservation.add');
				Route::get('all', 'ReservationController@all')->name('landlord.reservation.all');
			});
	});
