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


Route::get('/','HomeController@HomePage')->name('home');

Route::get('/ar','HomeController@HomePageArabic')->name('homeArabic');

Route::get('/survey','HomeController@getSurvey')->name('survey');

Route::post('/survey','HomeController@postSurvey');

Route::resource('/form','FormController');

Route::get('/form/ar/','FormController@getFormArabic');

Route::post('/form/ar/','FormController@postFormArabic');

Route::get('/thankYou','FormController@redirect')->name('FormThankYou');

Route::get('/thankYouAr','FormController@thankYouRedirectArabic')->name('FormThankYouArabic');

Route::get('/thank_you','HomeController@redirect')->name('SurveyThankYou');

Route::get('/learningPaths','HomeController@learningPaths')->name('learningPaths');

Route::post('/sendEmail','EmailController@send');