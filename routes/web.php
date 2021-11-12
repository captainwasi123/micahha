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
Route::namespace('web')->middleware('changeLang')->group(function(){

	//User Authentication
		Route::get('/login', 'authController@login')->name('user.login');
		Route::get('/logout', 'authController@logout')->name('user.logout');
		Route::get('/register', 'authController@register')->name('user.register');
		Route::get('/register/refer/{id}', 'authController@registerRefer')->name('user.register.refer');
		Route::get('/username/verify/{val}', 'authController@usernameVerify');

		Route::post('/login', 'authController@loginSubmit');
		Route::post('/register', 'authController@registerSubmit');

	//Web Pages
		Route::get('/', 'webController@index')->name('home');
		Route::get('contact', 'webController@contact')->name('web.contact');
		Route::get('terms-condition', 'webController@terms')->name('web.terms_condition');
		Route::get('pivacy-policy', 'webController@policy')->name('web.privacy_policy');

		Route::prefix('cart')->group(function(){
			Route::get('/', 'webController@cart')->name('web.cart');
			Route::get('remove/{id}', 'cartController@removeItem');
			Route::get('item/{type}/{method}/{id}', 'cartController@plusMinusItem');

			Route::prefix('checkout')->middleware('userAuth')->group(function(){
				Route::get('/', 'checkoutController@index')->name('web.cart.checkout');
				Route::post('/', 'checkoutController@checkout');
                Route::get('/order/confirmation/{id}', 'checkoutController@confirmOrder');
			});
		});

		//Languages
			Route::get('lang/{lang}', 'webController@changeLang');

		//Accommodation
			Route::prefix('accommodation')->group(function(){

				Route::get('/', 'accommodationController@index')->name('accommodation');
				Route::get('/filters', 'accommodationController@all')->name('accommodation.all');
				Route::get('/details/{id}', 'accommodationController@details')->name('accommodation.details');
                Route::post('/add_reservation_modal', 'accommodationController@add_reservation_modal')->name('web.add_reservation_modal');
                Route::post('/add_enquiry', 'accommodationController@add_accommodation_enquiry')->name('web.add_enquiry');
                Route::get('/feature/list', 'accommodationController@feature_list')->name('feature.list');

                //Wishlist
                Route::prefix('wishlist')->group(function(){

                	Route::get('add/{id}', 'accommodationController@addWishlist');
                });
			});

		//Collectibles
			Route::prefix('collectibles')->group(function(){

				Route::get('/', 'collectiblesController@index')->name('collectibles');
				Route::get('/{category}', 'collectiblesController@getProductByCategory');
				Route::get('/{category}/{subcategory}', 'collectiblesController@getProductBySubCategory');


				Route::get('/details/{id}/{title}', 'collectiblesController@details');

				//Wishlist
                Route::prefix('wishlist')->group(function(){

                	Route::get('add/{id}', 'collectiblesController@addWishlist');
                });

                //Add to cart
                Route::prefix('cart')->group(function(){

                	Route::get('add/{id}', 'cartController@addItemColl');
                });
			});


		//Art
			Route::prefix('art')->group(function(){

				Route::get('/', 'artController@index')->name('art');
				Route::get('/all', 'artController@all')->name('art.all');

				Route::get('/{category}', 'artController@category');


				Route::get('/details/{id}/{title}', 'artController@details');

				//Wishlist
                Route::prefix('wishlist')->group(function(){

                	Route::get('add/{id}', 'collectiblesController@addWishlist');
                });

                //Add to cart
                Route::prefix('cart')->group(function(){

                	Route::get('add/{id}', 'cartController@addItemArt');
                });

			});


        //Portrait Customization

        	Route::prefix('portrait')->group(function(){

        		Route::get('/', 'portraitController@index')->name('web.portrait');
        		Route::get('/{category}', 'portraitController@category');

				Route::get('/details/{id}/{title}', 'portraitController@details');

				Route::prefix('checkout')->middleware('userAuth')->group(function(){
					Route::post('/', 'portraitController@checkout')->name('web.portrait.checkout');
					Route::get('/order/confirmation/{id}', 'portraitController@confirmOrder');

				});
        	});
            
           
            
            
});
 // payments
Route::prefix('payments')->namespace('payments')->group(function(){

    Route::post('stripe', 'stripeController@paymentCharge')->name('payment.stripe.charge');

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

				//General
					Route::prefix('general')->group(function(){

						Route::get('users', 'generalController@users')->name('admin.general.users');
					});


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

								Route::get('/open/{id}', 'accommodationController@openInquiries');
							});
					});

				//Art & Portrait Customization
					Route::prefix('art')->group(function(){

						//Members
							Route::prefix('members')->group(function(){

								Route::get('pending', 'artController@pendingMembers')->name('admin.art.members.pending');
								Route::get('approved', 'artController@approvedMembers')->name('admin.art.members.approved');
								Route::get('rejected', 'artController@rejectedMembers')->name('admin.art.members.rejected');
								Route::get('blocked', 'artController@blockedMembers')->name('admin.art.members.blocked');

								Route::get('profile/{id}', 'artController@profileMembers');


								Route::get('approve/{id}', 'artController@approveMember');
								Route::get('reject/{id}', 'artController@rejectMember');
								Route::get('block/{id}', 'artController@blockMember');
							});

						//Listings
							Route::prefix('product')->group(function(){

								Route::get('pending', 'artController@pendingProduct')->name('admin.art.product.pending');
								Route::get('published', 'artController@publishedProduct')->name('admin.art.product.published');
								Route::get('rejected', 'artController@rejectedProduct')->name('admin.art.product.rejected');

								Route::get('details/{id}', 'artController@detailProduct');



								Route::get('approve/{id}', 'artController@approveProduct');
								Route::get('reject/{id}', 'artController@rejectProduct');
							});

						//Art Orders
							Route::prefix('withdraw')->group(function(){

								Route::get('new', 'artController@newWithdraw')->name('admin.art.withdraw.new');
								Route::get('paid', 'artController@paidWithdraw')->name('admin.art.withdraw.paid');
								Route::get('hold', 'artController@holdWithdraw')->name('admin.art.withdraw.hold');

								Route::get('markPaid/{id}', 'artController@markPaidWithdraw');
								Route::get('markHold/{id}', 'artController@markHoldWithdraw');
							});

						//Art Orders
							Route::prefix('orders')->group(function(){

								Route::get('new', 'artController@newOrders')->name('admin.art.orders.new');
								Route::get('processing', 'artController@processingOrders')->name('admin.art.orders.processing');
								Route::get('delivered', 'artController@deliveredOrders')->name('admin.art.orders.delivered');
							});


						//Portfolio
							Route::prefix('portfolio')->group(function(){

								Route::get('pending', 'artController@pendingPortfolio')->name('admin.art.portfolio.pending');
								Route::get('published', 'artController@publishedPortfolio')->name('admin.art.portfolio.published');
								Route::get('rejected', 'artController@rejectedPortfolio')->name('admin.art.portfolio.rejected');

								Route::get('details/{id}', 'artController@detailPortfolio');



								Route::get('approve/{id}', 'artController@approvePortfolio');
								Route::get('reject/{id}', 'artController@rejectPortfolio');
							});


						//Portrait Orders
							Route::prefix('portrait_orders')->group(function(){

								Route::get('new', 'artController@newOrdersPortrait')->name('admin.art.portrait.orders.new');
								Route::get('processing', 'artController@processingOrdersPortrait')->name('admin.art.portrait.orders.processing');
								Route::get('delivered', 'artController@deliveredOrdersPortrait')->name('admin.art.portrait.orders.delivered');
							});
					});

				//Collectibles
					Route::prefix('collectibles')->group(function(){

						//Products
						Route::prefix('products')->group(function(){

							Route::get('add', 'collectiblesController@addProduct')->name('admin.collectibles.products.add');
							Route::post('add', 'collectiblesController@insertProduct');

							Route::get('published', 'collectiblesController@publishedProduct')->name('admin.collectibles.products.published');
							Route::get('drafted', 'collectiblesController@draftedProduct')->name('admin.collectibles.products.drafted');

							Route::get('getSubCategory/{id}', 'collectiblesController@getSubCategoryProduct');

							Route::get('unPublish/{id}', 'collectiblesController@unPublishProducts');
							Route::get('publish/{id}', 'collectiblesController@publishProducts');
						});

						//Sales
						Route::prefix('sales')->group(function(){

							Route::get('new', 'collectiblesController@newOrders')->name('admin.collectibles.sales.new');
							Route::get('processing', 'collectiblesController@processingOrders')->name('admin.collectibles.sales.processing');
							Route::get('delivered', 'collectiblesController@deliveredOrders')->name('admin.collectibles.sales.delivered');

							Route::get('orderDetail/{id}', 'collectiblesController@detailOrders');

							Route::get('process/{id}', 'collectiblesController@processSale');
							Route::get('deliver/{id}', 'collectiblesController@deliverSale');

							Route::get('orderBadge', 'collectiblesController@newOrdersBadge');
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

						//Art & Portrait Customization
							Route::prefix('art')->group(function(){

								//Categories
									Route::get('categories', 'settingsController@categoriesArt')->name('admin.settings.art.categories');
									Route::post('categories', 'settingsController@categoriesArt_insert');

									Route::get('editCategory/{id}', 'settingsController@edit_categoriesArt');
									Route::post('editCategory', 'settingsController@categoriesArt_update')->name('admin.settings.art.editCategoryArt');

									Route::get('deleteCategory/{id}', 'settingsController@delete_categoriesArt');

								//Portrait Type
									Route::get('portraitType', 'settingsController@portraitTypeArt')->name('admin.settings.art.portraitType');
									Route::post('portraitType', 'settingsController@portraitTypeArt_insert');

									Route::get('editPortraitType/{id}', 'settingsController@edit_portraitTypeArt');
									Route::post('editPortraitType', 'settingsController@portraitTypeArt_update')->name('admin.settings.art.editPortraitType');

									Route::get('deletePortraitType/{id}', 'settingsController@delete_portraitTypeArt');


							});


						//Sales Settings
							Route::prefix('sales')->group(function(){

								Route::get('/', 'settingsController@salesSetting')->name('admin.settings.salesSetting');

								Route::post('/', 'settingsController@salesSettingUpdate');
							});
					});
			});

	});

//landlord
	Route::prefix('landlord')->namespace('landlord')->middleware('landlordAuth')->group(function(){
		//dashboard
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


				Route::get('chat/{id}', 'ReservationController@chat')->name('landlord.reservation.chat');
				Route::post('sendChat', 'ReservationController@sendChat')->name('landlord.reservation.sendchat');
			});
	});




//Artist
	Route::prefix('artist')->namespace('artist')->middleware('artistAuth')->group(function(){
		//dashboard
			Route::get('/', 'artistController@index')->name('artist.dashboard');


		//user settings
			Route::get('/profile-edit', 'SettingsController@profile_edit')->name('landlord.profile.edit');
			Route::post('/profile-edit', 'SettingsController@profile_update');

			Route::get('/change-password', 'SettingsController@change_password')->name('landlord.change.password');
			Route::post('/change-password', 'SettingsController@update_password');

		//Listings
			Route::prefix('products')->group(function(){

				Route::get('add', 'productController@add_product')->name('artist.product.add');
				Route::post('add', 'productController@insert_product')->name('artist.product.insert');

				Route::get('delete/{id}', 'productController@delete_product')->name('artist.product.delete');

				Route::get('edit/{id}', 'productController@edit_product')->name('artist.product.edit');
				Route::post('update', 'productController@update_product')->name('artist.product.update');

				Route::get('pending', 'productController@pending_product')->name('artist.product.pending');
				Route::get('approved', 'productController@approved_product')->name('artist.product.approved');
				Route::get('published', 'productController@published_product')->name('artist.product.published');
				Route::get('rejected', 'productController@rejected_product')->name('artist.product.rejected');

				Route::get('details/{id}', 'productController@product_details');
			});

		//Orders
			Route::prefix('orders')->group(function(){

				Route::get('new', 'ordersController@new')->name('artist.orders.new');
				Route::get('history', 'ordersController@history')->name('artist.orders.history');

				Route::get('process/{id}', 'ordersController@process');
			});

		//Withdraw
			Route::prefix('withdraw')->group(function(){

				Route::get('request', 'withdrawController@request');
				Route::get('history', 'withdrawController@history')->name('artist.withdraw.history');
			});


		//Portrait Portfolio
			Route::prefix('portfolio')->group(function(){

				Route::get('new', 'portfolioController@new')->name('artist.portfolio.new');
				Route::post('new', 'portfolioController@newInsert');

				Route::get('pending', 'portfolioController@pending')->name('artist.portfolio.pending');
				Route::get('published', 'portfolioController@published')->name('artist.portfolio.published');
				Route::get('rejected', 'portfolioController@rejected')->name('artist.portfolio.rejected');


				Route::get('edit/{id}', 'portfolioController@edit')->name('artist.portfolio.edit');
				Route::post('editUpdate', 'portfolioController@editUpdate')->name('artist.portfolio.update');

				Route::get('delete/{id}', 'portfolioController@delete')->name('artist.portfolio.delete');
			});

		//Portrait Orders
			Route::prefix('portrait_orders')->group(function(){

				Route::get('new', 'portraitOrderController@new')->name('artist.portrait_orders.new');
				Route::get('processing', 'portraitOrderController@processing')->name('artist.portrait_orders.processing');
				Route::get('delivered', 'portraitOrderController@delivered')->name('artist.portrait_orders.delivered');


				Route::get('details/{id}', 'portraitOrderController@details');
				Route::get('process/{id}', 'portraitOrderController@process');
				Route::get('deliver/{id}', 'portraitOrderController@deliver');

				Route::post('deliver', 'portraitOrderController@deliverSubmit')->name('artist.portrait_orders.deliver.submit');
			});
	});




//User
	Route::prefix('user')->namespace('user')->middleware('userAuth')->group(function(){

		Route::get('/', 'userController@index')->name('user.dashboard');

		Route::get('/becomeLandlord', 'userController@becomeLandlord')->name('become.a.landlord');
		Route::get('/becomeArtist', 'userController@becomeArtist')->name('become.a.artist');

		//Refer a friend
		Route::get('/refer', 'userController@refer')->name('refer.friend');

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

						Route::get('chat/{id}', 'ordersController@chat');
						Route::post('sendChat', 'ordersController@sendChat')->name('user.orders.accommodation.sendchat');
					});

				//Collectibles
					Route::prefix('collectibles')->group(function(){
						Route::get('active', 'ordersController@collectiblesActive')->name('user.orders.collectibles.active');
						Route::get('history', 'ordersController@collectiblesHistory')->name('user.orders.collectibles.history');
					});

			});


		//My Wishlist

			Route::prefix('wishlist')->group(function(){

				//Accommodation
				Route::prefix('accommodation')->group(function(){

					Route::get('/', 'wishlistController@accomList')->name('user.wishlist.accommodation');
					Route::get('/remove/{id}', 'wishlistController@accomListremove');
				});

				//Collectibles
				Route::prefix('collectibles')->group(function(){

					Route::get('/', 'wishlistController@collList')->name('user.wishlist.collectibles');
					Route::get('/remove/{id}', 'wishlistController@collListremove');
				});
			});
	});
