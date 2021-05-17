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

// frontends router
Route::prefix('/')->group(function () {
    // homes
    Route::get('', 'HomeController@index');

    // about
    Route::get('about', 'AboutController@index');

    // service
    Route::prefix('/service')->group(function () {
        Route::get('', 'ServiceController@index');
        Route::get('hosting','ServiceController@hosting');
        Route::get('software','ServiceController@software');
        Route::get('elv','ServiceController@elv');
        Route::get('datanetwork','ServiceController@datanetwork');
        Route::get('setup-domain','ServiceController@setupDomain');
    });

    // work
    Route::get('work', 'WorkController@index');

    // contact
    Route::get('contact', 'ContactController@index');
    Route::get('career', 'CareerController@index');
    Route::post('store', 'CareerController@store')->name("store");
  

    // blog
    Route::prefix('blog')->group(function () {
        Route::get('','BlogController@index');
        Route::get('show/{id}','BlogController@show');
    });

    //payment
    Route::prefix('/payment')->group(function () {
        Route::get('','PaymentController@index');
    });

    //send mail
    Route::post('/sendmail', 'ContactController@store');

    //language
    Route::get('/locale/{lang}', 'LocalizationController@langLocal');

    // PayPal
    // Route::get('payment', 'PayPalController@payment')->name('payment');
    // Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
    // Route::get('payment/success', 'PayPalController@success')->name('payment.success');
});

// backends router
Route::prefix('/admin')->group(function () {
    // homes
    Route::get('', 'Admins\BlogController@index');

     // blog
     Route::prefix('blog')->group(function () {
        Route::get('create','Admins\BlogController@create');
        Route::post('store','Admins\BlogController@store');
        Route::get('edit/{id}','Admins\BlogController@edit');
        Route::put('update/{id}','Admins\BlogController@update');
        Route::get('destroy/{id}','Admins\BlogController@destroy');
    });
});

Auth::routes();