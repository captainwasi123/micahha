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
								Route::get('blocked', 'accommodationController@blockedMembers')->name('admin.accommodation.members.blocked');

								Route::get('profile/{id}', 'accommodationController@profileMembers');


								Route::get('approve/{id}', 'accommodationController@approveMember');
								Route::get('reject/{id}', 'accommodationController@rejectMember');
								Route::get('block/{id}', 'accommodationController@blockMember');
							});	

						//Inquiries
							Route::prefix('inquiries')->group(function(){

								Route::get('/', 'accommodationController@inquiries')->name('admin.accommodation.inquiries');
							});
					});



				//Settings
					Route::prefix('settings')->group(function(){

						//Accommodation
							Route::prefix('accommodation')->group(function(){

								Route::get('propertyType', 'settingsController@property_type')->name('admin.settings.accommodation.propertyType');
								Route::post('propertyType', 'settingsController@property_type_insert');

								Route::get('editPropertyType/{id}', 'settingsController@edit_property_type');
								Route::post('editPropertyType', 'settingsController@property_type_update')->name('admin.settings.accommodation.editPropertyType');

								Route::get('deletePropertyType/{id}', 'settingsController@delete_property_type');



								Route::get('amenities', 'settingsController@amenities')->name('admin.settings.accommodation.amenities');
								Route::post('amenities', 'settingsController@amenities_insert');

								Route::get('deleteAmenities/{id}', 'settingsController@delete_amenities');

								Route::get('editAmenities/{id}', 'settingsController@edit_amenities');
								Route::post('editAmenities', 'settingsController@amenities_update')->name('admin.settings.accommodation.editAmenities');
							});
					});
			});

	});


//landlord
	Route::prefix('landlord')->namespace('landlord')->middleware('landlordAuth')->group(function(){
		//dashboard
			Route::get('/', 'landlordController@index')->name('landlord.dashboard');
		
		//user settings
			Route::get('/profile-edit', 'SettingsController@profile_edit')->name('user.profile.edit');
			Route::post('/profile-edit', 'SettingsController@profile_update');

			Route::get('/change-password', 'SettingsController@change_password')->name('user.change.password');
			Route::post('/change-password', 'SettingsController@update_password');
		
		//Listings
			Route::prefix('listing')->group(function(){
				
				Route::get('add', 'ListingController@add_listing')->name('landlord.listing.add');
				Route::post('add', 'ListingController@insert_listing')->name('landlord.listing.insert');
				
				Route::get('delete/{id}', 'ListingController@delete_list')->name('landlord.list.delete');
				
				Route::get('edit/{id}', 'ListingController@edit_list')->name('landlord.list.edit');
				Route::post('update', 'ListingController@update_list')->name('landlord.listing.update');

				Route::get('pending', 'ListingController@pending_listing')->name('landlord.listing.pending');
				Route::get('approved', 'ListingController@approved_listing')->name('landlord.listing.approved');
				Route::get('published', 'ListingController@published_listing')->name('landlord.listing.published');
				Route::get('rejected', 'ListingController@rejected_listing')->name('landlord.listing.rejected');

				Route::get('listing/details', 'ListingController@listing_details')->name('landlord.listing.details');

				Route::get('reservation', 'ListingController@reservation')->name('landlord.listing.reservation');

			});

		//reservation
			Route::prefix('reservation')->group(function(){
				
				Route::get('add', 'ReservationController@add')->name('landlord.reservation.add');
				Route::post('save', 'ReservationController@save')->name('landlord.reservation.save');
				Route::get('{status}', 'ReservationController@all')->name('landlord.reservation.all');
				Route::get('edit-status/{id}' , 'reservationcontroller@edit_status')->name('landlord.reservation.edit_status');
			
			});
	});
