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

/**
 * Памятка по методом и запросам
 *
 * GET /tasks (index)
 * GET /tasks/create (create)
 * GET /tasks/1 (show)
 * POST /tasks (store)
 * GET /tasks/1/edit (edit)
 * PATCH /tasks/1 (update)
 * DELETE /tasks/1 (destroy)
 */

Route::view('/', 'home');

Route::get('schedule', 'ScheduleController@index');
Route::get('personal', 'PersonalController@showPersonal')->name('personal');
//
Route::get('auth', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('auth', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//
Route::get('registration', 'Auth\RegisterController@showRegistrationForm');
Route::post('registration', 'Auth\RegisterController@register');
//
Route::get('vosstanovlenie-parolya', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('vosstanovlenie-parolya');
Route::post('vosstanovlenie-parolya/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('vosstanovlenie-parolya/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('vosstanovlenie-parolya/reset', 'Auth\ResetPasswordController@reset');
//
Route::post('/team-user/{teamID}', 'TeamUserController@store');
