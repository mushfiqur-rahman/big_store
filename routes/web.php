<?php
/********************FRONT Panel**********************
 * *******************BigStore Controller Start ****************
 */

    Route::get('/', [
        'uses'  => 'BigStoreController@index',
        'as'    => '/',
    ]);

    Route::get('/category-product/{id}', [
        'uses'  => 'BigStoreController@categoryProduct',
        'as'    => 'category-product',
    ]);

    Route::get('/product-details/{id}/{name}', [
            'uses'  => 'BigStoreController@productDetails',
            'as'    => 'product-details',
        ]);


   Route::get('/contact', [
           'uses'  => 'BigStoreController@eMail',
           'as'    => 'contact-us',
       ]);


   Route::get('/about', [
           'uses'  => 'BigStoreController@aboutUs',
           'as'    => 'about',
       ]);

/* *******************BigStore Controller END ****************
 */


/* *******************Cart Controller Start ****************
 */
   Route::post('/cart/add', [
        'uses'  =>  'CartController@addToCart',
        'as'    =>  'add-to-cart'
    ]);

   Route::get('/cart/show', [
        'uses'  =>  'CartController@showCart',
        'as'    =>  'show-cart'
    ]);

   Route::get('cart/delete/{id}', [
        'uses'  =>  'CartController@deleteCart',
        'as'    =>  'delete-cart-item'
    ]);

    Route::post('/cart/update', [
        'uses'  =>  'CartController@updateCart',
        'as'    =>  'update-cart'
    ]);




/* *******************Cart Controller END ****************
 */
/* *******************CHECK-OUT Controller START ****************
 */
   Route::get('/checkout', [
        'uses'  =>  'CheckoutController@index',
        'as'    =>  'checkout'
    ]);

   Route::post('/customer/registration', [
       'uses' => 'CheckoutController@customerSignUp',
        'as'  => 'customer-sign-up'
    ]);

   Route::post('/checkout/customer-login', [
       'uses' => 'CheckoutController@customerLoginCheck',
        'as'  => 'customer-login'
    ]);

   Route::post('/checkout/customer-logout', [
        'uses'  =>  'CheckoutController@customerLogout',
        'as'    =>  'customer-logout'
    ]);

   Route::get('/checkout/new-customer-login', [
        'uses'  =>  'CheckoutController@newCustomerLogin',
        'as'    =>  'new-customer-login'
    ]);



    Route::get('/checkout/shipping', [
        'uses'  =>  'CheckoutController@shippingForm',
        'as'    =>  'checkout-shipping'
    ]);

    Route::post('/shipping/save', [
        'uses'  =>  'CheckoutController@saveShippingInfo',
        'as'    =>  'new-shipping'
    ]);

   Route::get('/checkout/payment', [
       'uses'  =>  'CheckoutController@paymentForm',
       'as'    =>  'checkout-payment'
    ]);

   Route::post('/checkout/order',[
       'uses' =>'CheckoutController@newOrder',
       'as'   => 'new-order'
   ]);

   Route::get('/complete/order',[
           'uses' =>'CheckoutController@completeOrder',
           'as'   => 'complete-order'
       ]);

   Route::get('/ajax-email-check/{id}',[
           'uses' =>'CheckoutController@ajaxEmailCheck',
           'as'   => 'ajax-email-check'
       ]);




/* *******************CHECK-OUT Controller END ****************
 */

/**********STRIPE Start*********/
Route::get('addmoney/stripe', [
    'uses' => 'AddMoneyController@payWithStripe',
    'as' => 'addmoney.paywithstripe'
]);

Route::post('addmoney/stripe', [
    'uses' => 'AddMoneyController@postPaymentWithStripe',
    'as' => 'addmoney.stripe',
]);
/**********STRIPE End*********/

/**********PayPal Start*********/
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
/**********PayPal End*********/


/********************Admin Panel**********************
 * *******************CATEGORY Start ****************
 */

    Route::get('/category/add',[
        'uses' => 'CategoryController@index',
        'as'   => 'add-category'
    ]);

    Route::post('/category/save',[
        'uses' => 'CategoryController@saveCategoryInfo',
        'as'   => 'new-category'
    ]);

    Route::get('/category/manage',[
        'uses' => 'CategoryController@manageCategoryInfo',
        'as'   => 'manage-category'
    ]);

    Route::get('/category/unpublished/{id}',[
        'uses' => 'CategoryController@unpublishedCategoryInfo',
        'as'   => 'unpublished-category'
    ]);

    Route::get('/category/published/{id}',[
        'uses' => 'CategoryController@publishedCategoryInfo',
        'as'   => 'published-category'
    ]);

    Route::get('/category/edit/{id}',[
        'uses' => 'CategoryController@editCategoryInfo',
        'as'   => 'edit-category'
    ]);

    Route::post('/category/update',[
        'uses' => 'CategoryController@updateCategoryInfo',
        'as'   => 'update-category'
    ]);

    Route::get('/category/delete/{id}',[
        'uses' => 'CategoryController@deleteCategoryInfo',
        'as'   => 'delete-category'
    ]);
/*******Category End**********/

/*******Brand Start**********/

    Route::get('/brand/add',[
        'uses' => 'BrandController@index',
        'as'   => 'add-brand'
    ]);

    Route::post('/brand/save',[
        'uses' => 'BrandController@saveBrand',
        'as'   => 'new-brand'
    ]);

    Route::get('/brand/manage',[
        'uses' => 'BrandController@manageBrand',
        'as'   => 'manage-brand'
    ]);

    Route::get('/brand/unpublished/{id}',[
        'uses' => 'BrandController@unpublishedBrand',
        'as'   => 'unpublished-brand'
    ]);

    Route::get('/brand/published/{id}',[
        'uses' => 'BrandController@publishedBrand',
        'as'   => 'published-brand'
    ]);

    Route::get('/brand/edit/{id}',[
        'uses' => 'BrandController@editBrand',
        'as'   => 'edit-brand'
    ]);

    Route::post('/brand/update',[
        'uses' => 'BrandController@updateBrand',
        'as'   => 'update-brand'
    ]);

    Route::get('/brand/delete/{id}',[
        'uses' => 'BrandController@deleteBrand',
        'as'   => 'delete-brand'
    ]);

/**********BRAND End*********/

/**********Admin Product Start*********/

    Route::get('/product/add',[
        'uses' => 'ProductController@index',
        'as'   => 'add-product'
    ]);

    Route::post('/product/save',[
        'uses' => 'ProductController@saveProduct',
        'as'   => 'new-product'
    ]);

    Route::get('/product/manage',[
        'uses' => 'ProductController@manageProduct',
        'as'   => 'manage-product'
    ]);

    Route::get('/product/unpublished/{id}',[
        'uses' => 'ProductController@unpublishedProduct',
        'as'   => 'unpublished-product'
    ]);

    Route::get('/product/published/{id}',[
        'uses' => 'ProductController@publishedProduct',
        'as'   => 'published-product'
    ]);

    Route::get('/product/edit/{id}', [
        'uses'  => 'ProductController@editProduct',
        'as'    => 'edit-product'
    ]);


    Route::post('/product/update', [
        'uses'  => 'ProductController@updateProduct',
        'as'    => 'update-product'
    ]);

    Route::get('/product/delete/{id}',[
        'uses' => 'ProductController@deleteProduct',
        'as'   => 'delete-product'
    ]);


/**********Admin Product End*********/
/**********Admin Order Start*********/
    Route::get('/order/manage-order', [
        'uses'  => 'OrderController@manageOrderInfo',
        'as'    => 'manage-order'
    ]);

    Route::get('/order/view-order-detail/{id}', [
        'uses'  =>  'OrderController@viewOrderDetail',
        'as'    =>  'view-order-detail'
    ]);

    Route::get('/order/view-order-invoice/{id}', [
        'uses'  =>  'OrderController@viewOrderInvoice',
        'as'    =>  'view-order-invoice'
    ]);

    Route::get('/order/download-order-invoice/{id}', [
        'uses'  =>  'OrderController@downloadOrderInvoice',
        'as'    =>  'download-order-invoice'
    ]);

    Route::get('/order/delete-order/{id}', [
        'uses'  =>  'OrderController@deleteOrder',
        'as'    =>  'delete-order'
    ]);





/**********Admin Order End*********/

Auth::routes(['verify' => true]);

Route::get('profile', function (){
    return 'This is profile';
});//->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');
