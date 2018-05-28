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
Route::group(['prefix' => 'user'], function() {
 Route::get('/list', 'ListController@index')->name('user.list');
 Route::get('/new', 'ListController@createNew')->name('user.new');
 Route::get('/edit', 'ListController@edit')->name('user.edit');
 Route::post('/save', 'ListController@save')->name('user.save');
 Route::post('/update', 'ListController@update')->name('user.update');
});
/*Client*/
Route::group(['prefix' => 'client'], function() {
 Route::get('/list', 'ClientController@index')->name('client.list');
 Route::get('/new', 'ClientController@createNew')->name('client.new');
 Route::get('/edit', 'ClientController@edit')->name('client.edit');
 Route::get('/history', 'ClientController@history')->name('client.history');
});
/*Leads*/
Route::group(['prefix' => 'lead'], function() {
 Route::get('/list', 'LeadController@index')->name('lead.list');
 Route::get('/new', 'LeadController@createNew')->name('lead.new');
 Route::get('/edit', 'LeadController@edit')->name('lead.edit');
});
 Route::get('/schedule-backup', 'HomeController@backup')->name('schedule.backup');