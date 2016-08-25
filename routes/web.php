<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PageController@index');

Route::get('consulting', 'PageController@consulting');
Route::get('consulting/case-studies', 'PageController@caseStudies');
Route::get('consulting/case-studies/whygo', 'PageController@whygo');
Route::get('consulting/case-studies/boka-kanot', 'PageController@bokaKanot');
Route::get('consulting/case-studies/aria-templates', 'PageController@ariaTemplates');
Route::get('consulting/digital-agencies', 'PageController@digitalAgencies');
Route::get('consulting/top-tier', 'PageController@topTier');

Route::get('projects', 'PageController@projects');
//Route::get('code', 'PageController@code');
Route::get('about', 'PageController@about');


Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);


