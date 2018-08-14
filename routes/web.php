<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

// Home page
Route::get('/','IndexController@index');

//About route
Route::get('/about','AboutController@about');

//Contact route
Route::get('/contact','AboutController@contact');
Route::get('/wishlist','AboutController@wishlist');

Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Category/Listing page
Route::get('/products/{url}','ProductsController@products');

// Product detail page
Route::get('product/{id}','ProductsController@product');

//add to cart route
Route::match(['get','post'], '/add-cart','ProductsController@addtocart');

//cart page
Route::match(['get','post'], '/cart','ProductsController@cart');

// Get product attribute price
Route::get('/get-product-price','ProductsController@getProductPrice');

//delete product from cart page
Route::get('/cart/delete-product/{id}','ProductsController@deleteCartProduct');

//updat cart quantity
Route::get('/cart/update-quantity/{id}/{quantity}','ProductsController@updateCartQuantity');

//apply coupon
Route::post('/cart/apply-coupon','ProductsController@applyCoupon');

//checkout route
Route::get('/user-login','CheckoutController@userLogin');
Route::post('/customer-registration','CheckoutController@customerRegistration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');

//customer login and logout route
Route::post('/customer-login','CheckoutController@customerLogin');
Route::get('/customer-logout','CheckoutController@customerLogout');

Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@orderPlace');


Route::group(['middleware'=>['auth']],function(){
	Route::get('/admin/dashboard','AdminController@dashboard');
	
	//category route(admin)
Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
Route::get('/admin/view-category','CategoryController@viewCategory');
	
	//products route(admin)
Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
Route::get('/admin/view-product','ProductsController@viewProduct');
Route::get('/admin/delete-product/{id}','ProductsController@deleteProduct');
Route::get('/admin/delete-product-image/{id}','ProductsController@deleteProductImage');
Route::get('/admin/delete-alt-image/{id}','ProductsController@deleteAltImage');

	// Products attributes routs
Route::match(['get','post'],'/admin/add-attributes/{id}','ProductsController@addAttributes');
Route::match(['get','post'],'/admin/edit-attributes/{id}','ProductsController@editAttributes');
Route::match(['get','post'],'/admin/add-images/{id}','ProductsController@addImages');
Route::get('/admin/delete-attribute/{id}','ProductsController@deleteAttribute');

	// Coupon Route
Route::match(['get','post'],'/admin/add-coupon','CouponController@addCoupon');
Route::match(['get','post'],'/admin/edit-coupon/{id}','CouponController@editCoupon');
Route::get('/admin/view-coupon','CouponController@viewCoupon');
Route::get('/admin/delete-coupon/{id}','CouponController@deleteCoupon');

	//Admin banneer route
Route::match(['get','post'],'/admin/add-banner','BannersController@addBanner');
Route::match(['get','post'],'/admin/edit-banner/{id}','BannersController@editBanner');	
Route::get('/admin/view-banner','BannersController@viewBanner');
Route::get('/admin/delete-banner/{id}','BannersController@deleteBanner');
Route::get('/admin/delete-banner-image/{id}','BannersController@deleteBannerImage');

//Order routing
Route::get('/admin/view-order','CheckoutController@viewOrder');
Route::get('/admin/manage-order/{order_id}','CheckoutController@manageOrder');	

});

Route::get('/logout','AdminController@logout');