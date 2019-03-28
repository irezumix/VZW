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

Route::get('/', 'Controller@homeContent');
Route::get('/home', 'Controller@homeContent')->name('frontpage');
Route::get('/about', 'Controller@about')->name('about');
Route::get('/facilities', 'Controller@facilities')->name('facilities');
Route::get('/contact', 'Controller@contact')->name('contact');

// ======================================================================================
// ======================================= CALENDAR ======================================
// ======================================================================================

Route::get('calendar', 'EventsCalendarController@index')->name('calendar.index');
Route::post('calendar/add', 'EventsCalendarController@addEvent')->name('calendar.add')->middleware('auth');
Route::get('calendar/add', 'EventsCalendarController@add')->name('calendar.add')->middleware('auth');
Route::get('calendar/show', 'EventsCalendarController@eventIndex')->name('calendar.show')->middleware('auth');

Route::get('/calendar/{id}/edit', 'EventsCalendarController@edit')->name('calendar.edit')->middleware('auth');
Route::post('/calendar/{id}/update', 'EventsCalendarController@update')->name('calendar.update')->middleware('auth');
Route::get('/calendar/{id}/delete', 'EventsCalendarController@delete')->name('calendar.delete')->middleware('auth');
// ======================================================================================
// =========================================== EVENTS ===================================
// ======================================================================================
Route::get('/events', 'EventsController@index')->name('events');
Route::get('/events/{id}/details', 'EventsController@details')->name('events.detail');
Route::get('/events/create', 'EventsController@create')->name('events.create')->middleware('auth');
Route::post('/events/store', 'EventsController@store')->name('events.store')->middleware('auth');
Route::get('/events/{id}/edit', 'EventsController@edit')->name('events.edit')->middleware('auth');
Route::post('/events/{id}/update', 'EventsController@update')->name('events.update')->middleware('auth');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register.post');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'Controller@admin')->name('admin')->middleware('auth');
