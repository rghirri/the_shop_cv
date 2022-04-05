<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Front\HomePageController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FrontProductController;
use App\Http\Controllers\Front\ShoppingController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GridController;
use App\Http\Controllers\AdminAboutController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::resource('admin-product', AdminProductController::class);

//  front
//Route::resource('homepage', HomePageController::class);
Route::get('/', [ HomePageController::class, 'index' ])->name('homepage.index');

Route::resource('about', AboutController::class);

Route::resource('contact', ContactController::class);

Route::resource('products', FrontProductController::class);

Route::post('/cart/add', [ ShoppingController::class, 'add_to_cart' ])->name('cart.add');

Route::get('/cart', [ ShoppingController::class, 'cart' ])->name('cart');

Route::get('/cart/delete/{id}', [ ShoppingController::class, 'cart_delete' ])->name('cart.delete');

Route::get('/cart/rapid/add/{id}', [ ShoppingController::class, 'rapid_add' ])->name('cart.rapid.add');

Route::get('/cart/checkout', [ CheckoutController::class, 'index' ])->name('cart.checkout');

Route::get('/cart/checkout', [ CheckoutController::class, 'index' ])->name('cart.checkout');

Route::post('/cart/checkout', [ CheckoutController::class, 'pay' ])->name('cart.checkout');

// Admin
/**
 * Slider
 */
 Route::resource('slider', SliderController::class);

 Route::get('trashed-slider', [ SliderController::class, 'trashed' ] )->name('trashed-sliders.index');
 
 Route::put('restore-slider/{slider}', [ SliderController::class, 'restore' ] )->name('restore-slider');

/**
 * Sevices
 */
  Route::resource('services', ServicesController::class);


/**
 * Products Grid
 */
  Route::resource('grid', GridController::class);

  Route::get('trashed-grid', [ GridController::class, 'trashed' ] )->name('trashed-grid.index');
 
 Route::put('restore-grid/{grid}', [ GridController::class, 'restore' ] )->name('restore-grid');

 /**
  * About
  */
  Route::resource('adminAbout', AdminAboutController::class);