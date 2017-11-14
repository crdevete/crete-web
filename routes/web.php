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

Route::get('/survey-ar','HomeController@getSurveyArabic')->name('surveyArabic');

Route::post('/survey-ar','HomeController@postSurveyArabic');

Route::post('/survey','HomeController@postSurvey');

Route::resource('/form','FormController');

Route::get('/form-ar','FormController@getFormArabic');

Route::post('/form-ar','FormController@postFormArabic');

Route::get('/thankYou','FormController@redirect')->name('FormThankYou');

Route::get('/thankYouAr','FormController@thankYouRedirectArabic')->name('FormThankYouArabic');

Route::get('/thank_you','HomeController@redirect')->name('SurveyThankYou');

Route::get('/thank_you_ar','HomeController@redirectArabic')->name('SurveyThankYouArabic');

Route::get('/learningPaths','HomeController@learningPaths')->name('learningPaths');

Route::post('/sendEmail','EmailController@send');

//for learning paths:
    //web
    Route::get('/learningPaths/WebDevlopment/Backend','learningController@getWebBackend')->name('backend');
    Route::get('/learningPaths/WebDevlopment/Frontend','learningController@getWebFrontend')->name('frontend');
    Route::get('/learningPaths/WebDevlopment/Fullstack','learningController@getWebFullstack')->name('fullstack');

    //mobile
    Route::get('/learningPaths/MobileDevlopment/Android','learningController@getAndroid')->name('android');
    Route::get('/learningPaths/MobileDevlopment/Ios','learningController@getIos')->name('ios');

    //Business and marketing
    Route::get('/learningPaths/business','learningController@getBusiness')->name('business');
    Route::get('/learningPaths/marketing','learningController@getMarketing')->name('marketing');


    //Design
    Route::get('/learningPaths/Design/Logo','learningController@getLogo')->name('logo');
    Route::get('/learningPaths/Design/Web-Mobile-UI-Ux','learningController@getUi')->name('ui-ux');


    //Art and Animation
    Route::get('/learningPaths/Art-Animation/Art','learningController@getArt')->name('art');
    Route::get('/learningPaths/Art-Animation/Animations','learningController@getAnimation')->name('animation');


    //Arch-Civil-Mechanical
    Route::get('/learningPaths/Arch-Civil-Mechanical/Architecture','learningController@getArchitecture')->name('architecture');
    Route::get('/learningPaths/Arch-Civil-Mechanical/Civil','learningController@getCivil')->name('civil');
    Route::get('/learningPaths/Arch-Civil-Mechanical/Mechanical','learningController@getMechanical')->name('mechanical');
