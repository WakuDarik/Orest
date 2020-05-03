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
*/;
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

Route::group([
    'middleware' => 'auth'
], function () {
    Route::post('/getprops', 'MainController@getProps')->name('getProps');
    Route::post('/delimage', 'MainController@delMoreImg')->name('delMoreImg');
    Route::group([
        'middleware' => 'isAdmin',
        'prefix' => 'admin'
    ], function () {
        Route::get('/order', 'Admin\HomeController@index')->name('home');
        Route::get('/orders/{order}', 'Admin\HomeController@show')->name('order-show');
        Route::resource('categories', 'Admin\CategoryController');
        Route::resource('goods', 'Admin\ProdController');
        Route::resource('props', 'Admin\PropController');
    });
});
Route::get('/', 'MainController@index')->name('index');
Route::get('/ysloviya-arendi', 'MainController@showStatic')->name('ysloviya-arendi');
Route::get('/oplata', 'MainController@showStatic')->name('oplata');
Route::get('/contacts', 'MainController@showStatic')->name('contacts');
Route::get('/dostavka', 'MainController@showStatic')->name('dostavka');
Route::post('/search', 'MainController@search')->name('search');
Route::post('/delivery', 'MainController@delivery')->name('delivery');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
Route::post('/basket/order/{id}', 'BasketController@oneClickOrder')->name('one-click-order');

Route::group(['middleware' => 'basketNoEmpty'], function () {
    Route::get('/basket', 'BasketController@basket')->name('basket');
    Route::get('/basket/order', 'BasketController@order')->name('order');
    Route::get('/basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
    Route::post('/basket/order', 'BasketController@confirm')->name('basket-confirm');
});

Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product}', 'MainController@prod')->name('prod');
