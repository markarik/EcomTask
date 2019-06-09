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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',function(){

    return view('Pages.dashboard2');

});

Route::get('/dashboard2',function(){

    return view('Pages.dashboard2');

});
Route::get('/details',function(){

    return view('Pages.details');

});

Route::get('/cart',function(){
    return view('Pages.cart');
});

