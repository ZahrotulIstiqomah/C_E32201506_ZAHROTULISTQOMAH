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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hello', function() {
    return 'Hello Word' ;
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('page/{nomor}', function($nomor){
    return 'ini Halaman ke-' . $nomor;
});

/*Route::get('user', 'ManagementUserController@index');
Route::resource('user', 'ManagementUserController');

Route::get("home", function(){
    return view("home");
});*/


/*Route::group(['namespace'=> 'frontend'], function(){
	Route::resource('home', 'HomeController');
});

Route::group(['namespace'=>'backend'], function()
{
  Route::resource('dashboard','DashboardController');
});*/

/*Auth::routes();

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/', 'HomeController@index');
    Route::resource('home', 'HomeController');
});

Route::group(['middleware' => ['web','auth']], function(){
    Route::group(['namespace' => 'Backend'], function(){
        Route::resource('dashboard', 'DashboardController');
    });
});*/

Route::group(['middleware' => ['web','auth']], function () 
{
    Route::group(['namespace' => 'Backend'], function()
    {
        Route::resource('dashboard', 'DashboardController');
        Route::resource('pendidikan', 'PendidikanController');
    });
});
Auth::routes();
Route::resource('pendidikan', 'pendidikanController');