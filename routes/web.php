<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SslCommerzPaymentController;







Route::get('/clear', function() {
$exitCode = Artisan::call('config:clear');
$exitCode = Artisan::call('cache:clear');
$exitCode = Artisan::call('config:cache');
return 'DONE'; //Return anything
});

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

    Route::get('/','FrontendController@index')->name('homepage');
    Route::get('/shops','FrontendController@shops')->name('shops');
    Route::get('/shops/{slug}','FrontendController@shopsDetails')->name('shops.details');
    Route::get('/about','FrontendController@about')->name('about');
    Route::get('/contact','FrontendController@contact')->name('contact');
    Route::post('/subscribe','FrontendController@subscribe')->name('subscribe');
    Route::get('/sitters','FrontendController@sitter')->name('sitter');
    Route::get('/sitters/details/{id}','FrontendController@sitterDetails')->name('sitter.details');
    Route::get('/sitter/request/payment/submit/{id}','FrontendController@sitterpayment')->name('sitter.request.payment');
    Route::get('/sitters/request','FrontendController@sitterRequest')->name('sitter.request');
    Route::post('/sitters/request','FrontendController@sitterRequestPost')->name('sitter.request');
    Route::post('/contact/store','FrontendController@contactstore')->name('contact.store');
    Route::get('/feedback','FrontendController@feedback')->name('feedback');
    Route::post('/feedbackstore','FrontendController@feedbackstore')->name('feedbackstore');
    Route::get('/forget-password','FrontendController@forgetPassword')->name('forget.password');
    Route::post('/forget-password','FrontendController@forgetPasswordpost')->name('forget.password.post');

    Route::get('/blogs','FrontendController@blogs')->name('blogs');
    Route::get('/blog/details/{slug}','FrontendController@blogDetails')->name('blog.details');
    Route::get('/services','FrontendController@services')->name('services');

    Route::get('/cart','FrontendController@cart')->name('cart.page');

    Route::post('resarvation/submit','FrontendController@reservationstore')->name('resarvation.submit');


    Route::get('user/login','FrontendController@login')->name('user.login');
    Route::get('user/register','FrontendController@register')->name('user.register');
    Route::post('user/register','FrontendController@registerPost')->name('user.register');
    Route::get('sitter/register','FrontendController@sitterRegister')->name('sitter.register');
    Route::post('sitter/register','FrontendController@sitterRegisterPost')->name('sitter.register');



  /* ================= product shopping cart  ==================================*/
    Route::get('shipping', 'ShoppingCartController@shipping')->name('shipping.page')->middleware('auth');
    Route::post('food/add_to_cart', 'ShoppingCartController@store')->name('food.add_to_cart');
    Route::post('food/addtocart', 'ShoppingCartController@storesingle')->name('food.single.cart');
    Route::post('food/cart_update', 'ShoppingCartController@update');
    Route::get('food/cart', 'ShoppingCartController@productscart')->name('food.cart');
    Route::post('food/cart/item/destroy/', 'ShoppingCartController@destroy')->name('product.cart.destroy');


     //for ajax call

    Route::get('/food/shopping/cart/count/ajax','ShoppingCartController@showcartcount')->name('food.cart.count.ajax');
    Route::get('/food/shopping/cart/hover/ajax','ShoppingCartController@showcarthover')->name('food.cart.hover.ajax');

    Route::get('/food/carttable/ajax','ShoppingCartController@showcarttable')->name('food.cartable.ajax');
    Route::get('/food/cartsummery/ajax','ShoppingCartController@showcartsummery')->name('food.cartsummery.ajax');
    Route::post('/food/incrementCart','ShoppingCartController@update')->name('food.incrementCart');
    Route::post('/food/decrementCart','ShoppingCartController@decrementCart')->name('food.decrementCart');
    Route::post('/food/remove_cart','ShoppingCartController@remove_cart')->name('food.remove_cart');

    Route::post('user/order/store','OrderController@store')->name('user.order.store')->middleware('auth');



Auth::routes(['verify' => true]);


Route::group(['middleware'=> ['auth','user','verified']],function(){
    Route::get('/user/dashboard','FrontendController@userdashboard')->name('user.dashboard');
    Route::get('/user/sitters/request','FrontendController@usersitterrequest')->name('user.sitters.request');
    Route::post('/user/sitters/payment/{id}','FrontendController@userSitterPayment')->name('sitter.payment');
    Route::get('/user/shop/order','FrontendController@userShopOrder')->name('user.shop.order');
    Route::get('/user/shop/order/details/{id}','FrontendController@userShopOrderDetails')->name('user.shop.order.details');
});

Route::group(['middleware'=> ['auth','sitter','verified']],function(){
    Route::get('/sitter/dashboard','FrontendController@sitterDashboard')->name('sitter.dashboard');
    Route::get('/sitter/orders','FrontendController@sitterOrder')->name('sitter.orders');
    Route::get('/sitter/shop/order','FrontendController@sitterShopOrder')->name('sitter.shop.order');
    Route::get('/sitter/shop/order/details/{id}','FrontendController@sitterShopOrderDetails')->name('sitter.shop.order.details');
});

Route::group(['middleware'=> ['auth','admin','verified']],function(){

    Route::get('/admin/dashboard','HomeController@index')->name('admin.dashboard');



    Route::resource('category', ProductCategoryController::class);
    Route::resource('menutype', MenuTypeController::class);
    Route::resource('product', ProductController::class);
    Route::resource('reservation', ReservationController::class);
    Route::resource('adminfeedback', FeedbackController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('blog-category', BlogCategoryController::class);
    Route::resource('web-setting', WebsettingController::class);




    Route::group(['namespace'=> 'Admin','as'=> 'admin.'],function(){


        Route::get('/order/all', 'OrderController@orderAll')->name('order.all');
        Route::get('/order/cancel', 'OrderController@orderCancel')->name('order.cancel');
        Route::get('/order/confirmed', 'OrderController@orderConfirmed')->name('order.confirmed');
        Route::get('/order/delivered', 'OrderController@orderDelivered')->name('order.delivered');
        Route::get('/order/failed', 'OrderController@orderFailed')->name('order.failed');
        Route::get('/order/outofdelivery', 'OrderController@orderOutofDelivery')->name('order.outofdelivery');
        Route::get('/order/pending', 'OrderController@orderPending')->name('order.pending');
        Route::get('/order/processing', 'OrderController@orderProcessing')->name('order.processing');
        Route::get('/order/returned', 'OrderController@orderReturn')->name('order.returned');



        Route::get('/order/show/{id}', 'OrderController@orderShow')->name('order.show');
        Route::get('/order/billing/{id}', 'OrderController@Billing')->name('order.billing');
        Route::post('/order/status/payment/{id}', 'OrderController@paymentUpdate')->name('payment.update');
        Route::post('/order/status/update/{id}', 'OrderController@orderUpdate')->name('order.update');
    });

    Route::get('/sitter/users','UserController@sitterUserIndex')->name('sitter.user.index');
    Route::get('/sitter/users/{id}','UserController@sitterUserShow')->name('sitter.user.show');
    Route::get('/sitter/users/edit/{id}','UserController@sitterUserEdit')->name('sitter.user.edit');
    Route::put('/sitter/users/update/{id}','UserController@sitterUserUpdate')->name('sitter.user.update');
    Route::get('/admin/users','UserController@adminUserIndex')->name('admin.user.index');
    Route::get('/general/users','UserController@generalUserIndex')->name('general.user.index');
    Route::post('/active/users/{id}','UserController@activeUser')->name('user.active');
    Route::post('/inactive/users{id}','UserController@inactiveUser')->name('user.inactive');
    Route::get('/sitters/request/all','UserController@sitterRequest')->name('admin.sitter.index');
    Route::post('/admin/sitter/payment/{id}','UserController@adminSitterPayment')->name('admin.sitter.payment');
    Route::get('/sitters/request/show/{id}','UserController@sitterRequestShow')->name('sitter.request.show');
    Route::post('/sitters/request/approved/{id}','UserController@sitterRequestapproved')->name('admin.sitter.request.approved');

});


Route::group(['middleware'=> ['auth','sitter','verified']],function(){
    Route::get('sitter/profile','HomeController@sitterProfileShow')->name('sitter.profile.show');
    Route::get('sitter/profile/edit','HomeController@sitterProfileEdit')->name('sitter.profile.edit');
    Route::post('sitter/profile/update/{id}','HomeController@sitterProfileUpdate')->name('sitter.profile.update');
    Route::get('sitter/change/password','HomeController@sitterprofileChangePassword')->name('sitter.profile.change.password');
    Route::post('sitter/change/password','HomeController@sitterprofileChangePasswordPost')->name('sitter.profile.change.password');
});

Route::group(['middleware'=> ['auth','admin','verified']],function(){
    Route::get('admin/profile','HomeController@adminProfileShow')->name('admin.profile.show');
    Route::get('admin/profile/edit','HomeController@adminProfileEdit')->name('admin.profile.edit');
    Route::post('admin/update/{id}','HomeController@adminProfileUpdate')->name('admin.profile.update');
    Route::get('admin/change/password','HomeController@adminprofileChangePassword')->name('admin.profile.change.password');
    Route::post('admin/change/password','HomeController@adminprofileChangePasswordPost')->name('admin.profile.change.password');
});

Route::group(['middleware'=> ['auth','user','verified']],function(){
    Route::get('user/profile','HomeController@userProfileShow')->name('user.profile.show');
    Route::get('user/profile/edit','HomeController@userProfileEdit')->name('user.profile.edit');
    Route::post('user/update/{id}','HomeController@userProfileUpdate')->name('user.profile.update');
    Route::get('user/change/password','HomeController@userprofileChangePassword')->name('user.profile.change.password');
    Route::post('user/change/password','HomeController@userprofileChangePasswordPost')->name('user.profile.change.password');
});


// SSLCOMMERZ Start
Route::get('/online/payment', [SslCommerzPaymentController::class, 'customPayment'])->name('online.custom.payment');
Route::post('/online/payment/{id}', [SslCommerzPaymentController::class, 'customPaymentPost'])->name('online.payment.custom');

Route::get('/example1/{id}', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('online.payment');
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::group(['middleware'=> ['auth','admin','verified']],function(){
    Route::get('admin/contact','FrontendController@adminContactIndex')->name('admin.contact.index');
    Route::get('admin/contact/delete/{id}','FrontendController@adminContactDelete')->name('admin.contact.delete');
    Route::get('admin/subscribe','FrontendController@adminSubscribeIndex')->name('admin.subscribe.index');
    Route::get('admin/subscribe/delete/{id}','FrontendController@adminSubscribeDelete')->name('admin.subscribe.delete');

});
