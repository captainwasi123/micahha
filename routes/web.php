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
				Route::get('/filters', 'accommodationController@all')->name('accommodation.all');
				Route::get('/details/{id}', 'accommodationController@details')->name('accommodation.details');
                Route::post('/add_reservation_modal', 'accommodationController@add_reservation_modal')->name('web.add_reservation_modal');
                Route::post('/add_enquiry', 'accommodationController@add_accommodation_enquiry')->name('web.add_enquiry');
                Route::get('/feature/list', 'accommodationController@feature_list')->name('feature.list');
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
								Route::get('due', 'accommodationController@dueListing')->name('admin.accommodation.listing.due');
								Route::get('published', 'accommodationController@publishedListing')->name('admin.accommodation.listing.published');
								Route::get('rejected', 'accommodationController@rejectedListing')->name('admin.accommodation.listing.rejected');

								Route::get('details/{id}', 'accommodationController@detailListing');



								Route::get('approve/{id}', 'accommodationController@approveListing');
								Route::get('reject/{id}', 'accommodationController@rejectListing');
							});

						//Bookings
							Route::prefix('booking')->group(function(){

								Route::get('pending', 'accommodationController@pendingBooking')->name('admin.accommodation.booking.pending');
								Route::get('approved', 'accommodationController@approvedBooking')->name('admin.accommodation.booking.approved');
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

				//Collectibles
					Route::prefix('collectibles')->group(function(){

						Route::get('statistics', 'collectiblesController@statistics')->name('admin.collectibles.statistics');


						//Products
						Route::prefix('products')->group(function(){

							Route::get('add', 'collectiblesController@addProduct')->name('admin.collectibles.products.add');
							Route::post('add', 'collectiblesController@insertProduct');

							Route::get('published', 'collectiblesController@publishedProduct')->name('admin.collectibles.products.published');
							Route::get('drafted', 'collectiblesController@draftedProduct')->name('admin.collectibles.products.drafted');

							Route::get('getSubCategory/{id}', 'collectiblesController@getSubCategoryProduct');
						});

						//Sales
						Route::prefix('sales')->group(function(){

							Route::get('new', 'collectiblesController@newOrders')->name('admin.collectibles.sales.new');
							Route::get('processing', 'collectiblesController@processingOrders')->name('admin.collectibles.sales.processing');
							Route::get('delivered', 'collectiblesController@deliveredOrders')->name('admin.collectibles.sales.delivered');

							Route::get('orderDetail', 'collectiblesController@detailOrders');
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

						//Collectibles
							Route::prefix('collectibles')->group(function(){

								//Categories
								Route::get('categories', 'settingsController@categories')->name('admin.settings.collectibles.categories');
								Route::post('categories', 'settingsController@categories_insert');

								Route::get('editCategory/{id}', 'settingsController@edit_categories');
								Route::post('editCategory', 'settingsController@categories_update')->name('admin.settings.collectibles.editCategory');

								Route::get('deleteCategory/{id}', 'settingsController@delete_categories');

								//Sub Categories
								Route::get('subCategories', 'settingsController@subCategories')->name('admin.settings.collectibles.subCategories');
								Route::post('subCategories', 'settingsController@subCategories_insert');

								Route::get('editSubCategory/{id}', 'settingsController@edit_subCategories');
								Route::post('editSubCategory', 'settingsController@subCategories_update')->name('admin.settings.collectibles.editSubCategory');

								Route::get('deleteSubCategory/{id}', 'settingsController@delete_subCategories');


							});
					});
			});

	});

//landlord
	Route::prefix('landlord')->namespace('landlord')->middleware('landlordAuth')->group(function(){
		//dashboard
			Route::get('/', 'LandlordController@index')->name('landlord.dashboard');

			Route::get('/', 'landlordController@index')->name('landlord.dashboard');


			Route::get('/', 'LandlordController@index')->name('landlord.dashboard');


			Route::get('/', 'landlordController@index')->name('landlord.dashboard');


		//user settings
			Route::get('/profile-edit', 'SettingsController@profile_edit')->name('landlord.profile.edit');
			Route::post('/profile-edit', 'SettingsController@profile_update');

			Route::get('/change-password', 'SettingsController@change_password')->name('landlord.change.password');
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

				Route::get('details/{id}', 'ListingController@listing_details');

				Route::get('reservation', 'ListingController@reservation')->name('landlord.listing.reservation');
			});

		//reservation
			Route::prefix('reservation')->group(function(){

				Route::get('add', 'ReservationController@add')->name('landlord.reservation.add');
                Route::get('edit/{id}', 'ReservationController@edit')->name('landlord.reservation.edit');
				Route::post('save', 'ReservationController@save')->name('landlord.reservation.save');
				Route::get('{status}', 'ReservationController@all')->name('landlord.reservation.all');
                Route::get('edit-status/{id}' , 'ReservationController@edit_status')->name('landlord.reservation.edit_status');
			});
	});


//User
	Route::prefix('user')->namespace('user')->middleware('userAuth')->group(function(){

		Route::get('/', 'userController@index')->name('user.dashboard');


		//user settings
			Route::get('/profile-edit', 'SettingController@profile_edit')->name('user.profile.edit');
			Route::post('/profile-edit', 'SettingController@profile_update');

			Route::get('/change-password', 'SettingController@change_password')->name('user.change.password');
			Route::post('/change-password', 'SettingController@update_password');


		//My Orders

			Route::prefix('orders')->group(function(){

				//Accommodation
				Route::prefix('accommodation')->group(function(){

					Route::get('pending', 'ordersController@accommodationPending')->name('user.orders.accommodation.pending');
					Route::get('active', 'ordersController@accommodationActive')->name('user.orders.accommodation.active');
					Route::get('history', 'ordersController@accommodationHistory')->name('user.orders.accommodation.history');


					Route::get('cancel/{id}', 'ordersController@accommodationCancel')->name('user.orders.accommodation.cancel');
				});
			});
	});
