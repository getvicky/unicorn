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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*User*/
Route::group(['prefix' => 'user'], function() {
 Route::get('/list', 'ListController@index')->name('user.list');
 Route::get('/new', 'ListController@createNew')->name('user.new');
 Route::get('/edit/{id?}', 'ListController@edit')->name('user.edit');
 Route::post('/save', 'ListController@save')->name('user.save');
 Route::post('/update/{id}', 'ListController@update')->name('user.update');
 Route::get('/delete/{id}', 'ListController@delete')->name('user.delete');
 Route::get('/document/{id}', 'ListController@document')->name('user.document');
});

/*Client*/
Route::group(['prefix' => 'client'], function() {
 Route::get('/list', 'ClientController@index')->name('client.list');
 Route::get('/new', 'ClientController@createNew')->name('client.new');
 Route::get('/edit/{id}', 'ClientController@edit')->name('client.edit');
 Route::get('/history', 'ClientController@history')->name('client.history');
 Route::post('/save', 'ClientController@save')->name('client.save');
 Route::get('/delete/{id}', 'ClientController@delete')->name('client.delete');
 Route::post('/update/{id}', 'ClientController@update')->name('client.update');
});

/*Leads*/
Route::group(['prefix' => 'lead'], function() {
 Route::get('/list', 'LeadController@index')->name('lead.list');
 Route::get('/new', 'LeadController@createNew')->name('lead.new');
 Route::get('/edit', 'LeadController@edit')->name('lead.edit');
});

Route::get('/schedule-backup', 'HomeController@backup')->name('schedule.backup');
 
/*Company*/
Route::group(['prefix' => 'company'], function() {
 Route::get('/list', 'CompanyController@index')->name('company.list');
 Route::get('/new', 'CompanyController@create')->name('company.new');
 Route::get('/edit/{id}', 'CompanyController@edit')->name('company.edit');
 Route::post('/save', 'CompanyController@store')->name('company.save');
 Route::get('/delete/{id}', 'CompanyController@destroy')->name('company.delete');
 Route::post('/update/{id}', 'CompanyController@update')->name('company.update');
});