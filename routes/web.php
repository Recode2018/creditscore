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

$this->get('a', function () {
    dd(
        (new \App\Classes\CreditScore(factory(\App\Farmer::class)->make()))->metrics()
    );
});

$this->view('/', 'welcome')->name('login');
$this->post('/', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/farmers', 'FarmerController@index')->name('farmers');
Route::get('/farmers/create', 'FarmerController@create')->name('farmers.create');
Route::post('/farmers/create', 'FarmerController@accessBank_restRequest');
Route::get('/farmers/profile/{id}', 'FarmerController@profile')->name('farmers.profile');
Route::get('/farmers/import', 'FarmerController@import')->name('farmers.import');
Route::post('/farmers/import', 'FarmerController@uploadSheet')->name('farmers.upload');
