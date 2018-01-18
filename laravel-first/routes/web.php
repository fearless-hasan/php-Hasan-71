<?php

Route::get('/',[
    'uses'  => 'NewShopController@index',
    'as'    => '/'
]);


Route::get('/category-product',[
    'uses'  => 'NewShopController@categoryProduct',
    'as'    => 'category-product'
]);

Route::get('/mail',[
    'uses'  => 'NewShopController@mail',
    'as'    => 'mail'
]);




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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', function () {
//    return  'welcome';
//});


//Route::get('/bitm', function () {
//    return view ('home');
//});
//
//Route::get('/basis/bitm', function () {
//    return  'basis';
//});
//
////Route::get('/', 'StudentController@index');
//
//Route::get('/', [
//    'uses' => 'StudentController@index',
//    'as' => '/'
//]);
//
//Route::get('/about', [
//    'uses' => 'StudentController@about',
//    'as' => '/about'
//]);