<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SocialMediaLoginController;
use App\Http\Controllers\FrontProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StartSellingController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\SellerProductController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. No
w create something great!
|
*/

Route::get('/home2', function () {
    return view('frontend.index2');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
});

Route::get('/link', function () {
    Artisan::call('storage:link');
});

Route::get('/test', function () {
    dd(session()->get('cart'));
    alert()->warning('Please choose a user first');

    return view('backend.dashboard');
});

Route::get('/add_new_product', function () {
    return view('frontend.add_new_product');
});

// convert user to seller
Route::get('/start-selling', [StartSellingController::class, 'convert_user_to_seller'])->name('user_to_seller');

Route::middleware(['auth', 'isSeller'])->group(function () {
    Route::get('/partner/overview', function () {
        return view('frontend.partner_portal.overview');
    })->name('partner_overview');
    Route::get('/partner/product/list', [SellerProductController::class, 'seller_product'])->name('partner_product');
    Route::get('/partner/sales', function () {
        return view('frontend.partner_portal.sales');
    })->name('partner_sales');
    Route::get('/partner/billing', function () {
        return view('frontend.partner_portal.billing');
    })->name('partner_billing');
    Route::get('/partner/code-needed/{unique_id}', [SellerProductController::class, 'code_needed'])->name('partner_code_needed');
    Route::put('/partner/code-needed/update', [SellerProductController::class, 'update_code_redemption'])->name('update_code_redemption');

    Route::get('/partners/preview/{id}', function () {
        return view('frontend.partner_portal.preview');
    })->name('partner_preview');


    //Frontend product
    Route::get('/product/create/{unique_id}', [FrontProductController::class, 'create'])->name('front.product.create');
    Route::post('/product/store', [FrontProductController::class, 'store'])->name('front.product.store');
    Route::post('/product/image/store', [
        FrontProductController::class, 'store_image_dropzone'
    ])->name('front.product.store_image_dropzone');
    Route::post('/product/image/delete', [
        FrontProductController::class, 'delete_image_dropzone'
    ])->name('front.product.delete_image_dropzone');
});


Route::get('guide', function () {
    return view('frontend.guidelines.guide');
});
Route::get('guide/copy', function () {
    return view('frontend.guidelines.guide-copy');
});
Route::get('guide/image', function () {
    return view('frontend.guidelines.image-guideline');
});

Route::get('guide/how-it-work', function () {
    return view('frontend.guidelines.how-it-work');
});
Route::get('guide/getting-paid', function () {
    return view('frontend.guidelines.getting-paid');
});


Route::get('/partner/start-selling', function () {
    return view('frontend.partner_portal.sell_on');
})->name('partner_sell_on');

//Google OAuth Routes
Route::get('/auth/google', [SocialMediaLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/response', [
    SocialMediaLoginController::class, 'handleGoogleResponse'
])->name('login.google.response');

//Facebook OAuth Routes
Route::get('/auth/facebook', [SocialMediaLoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/auth/facebook/response', [
    SocialMediaLoginController::class, 'handleFacebookResponse'
])->name('login.facebook.response');

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/browse', [FrontController::class, 'browse'])->name('browse');
Route::get('/career', [FrontController::class, 'career'])->name('career');
Route::get('/meet_the_team', [FrontController::class, 'meet_the_team'])->name('meet_the_team');
Route::get('/plus', [FrontController::class, 'plus'])->name('plus');
Route::get('/privacy', [FrontController::class, 'privacy'])->name('privacy');
Route::get('/terms', [FrontController::class, 'terms'])->name('terms');
Route::get('/help', [FrontController::class, 'help'])->name('terms');
Route::get('/affiliate', [FrontController::class, 'affiliate'])->name('affiliate');
Route::get('/product-details/{product}', [FrontController::class, 'product_details'])->name('product-details');
//cart
Route::post('/cart/add', [FrontController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/membership/cart/add', [FrontController::class, 'membership_card_add'])->name('membership.add_to_cart');
Route::get('/cart', [FrontController::class, 'cart'])->name('cart');

Route::get('/checkout', [FrontController::class, 'checkout'])->name('checkout');

Route::post('/checkout/login', [FrontController::class, 'checkout_login'])->name('checkout_login');
Route::post('/checkout/register', [FrontController::class, 'checkout_register'])->name('checkout_register');

Route::post('/cart/quantity/update', [FrontController::class, 'update_cart_item_quantity'])->name('update_quantity');
Route::post('/cart/item/delete', [FrontController::class, 'delete_cart_item'])->name('delete_cart_item');

Route::get('/account-overview', [FrontController::class, 'accoutn_overview'])->name('account-overview');
Route::get('/account/profile', [FrontController::class, 'accoutn_profile'])->name('account-profile');
Route::get('/account/cradits', [FrontController::class, 'accoutn_credit'])->name('account-credits');
Route::get('/account/email', [FrontController::class, 'accoutn_email'])->name('account-email');
Route::get('/account/products', [FrontController::class, 'accoutn_products'])->name('account-products');
Route::get('/wishlist/products', [FrontController::class, 'wishlist_product'])->name('wishlist_products');

Route::get('/blogs', [FrontController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [FrontController::class, 'blog_detail'])->name('blog_detail');
Route::get('/blog/search', [FrontController::class, 'blog_search'])->name('blog_search');

require __DIR__ . '/auth.php';

Route::group(["middleware" => ['auth']], function () {
    Route::get('/wishlist/add/{product}', [FrontController::class, 'add_to_wishlist'])->name('add_to_wishlist');
    Route::delete('/wishlist/delete/{wishlist}', [FrontController::class, 'delete_wishlist_product'])->name('delete_wishlist_product');
    Route::get('/wishlist/products', [FrontController::class, 'wishlist_product'])->name('wishlist_products');
});

Route::group(["prefix" => "dashboard", "as" => "admin.", "middleware" => ['auth', 'isAuthorized']], function () {
    include_once('bulbul.php');

    Route::group(['namespace' => \App\Models\Permission::DASHBOARD_MODULE], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
});

include_once('mynul.php');

// stripe routes
Route::post('/stripe-payment', [PaymentController::class, 'handlePost'])->name('stripe.payment');

// paypal routes 
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

// route for processing payment
Route::post('payment/paypal', [PaymentController::class, 'pay'])->name('payment_post');
Route::get('paypal/success', [PaymentController::class, 'paypal_success'])->name('paypal_success');
Route::get('paypal/error', [PaymentController::class, 'paypal_error'])->name('paypal_error');
// route for check status of the payment
Route::get('status', [PaymentController::class, 'getPaymentStatus'])->name('payment_status');

Route::get('wishlist_products', function(){
    return redirect()->route('home');
})->name('wishlist_products');