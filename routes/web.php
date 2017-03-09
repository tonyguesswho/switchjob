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
Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('invites', 'InvitesController');
Route::resource('jobs', 'jobsController');
Route::resource('developers', 'DevelopersController');
Route::resource('developer-skills', 'DeveloperSkillsController');
Route::resource('skills', 'SkillsController');
Route::resource('live-projects', 'LiveProjectsController');
Route::resource('companies', 'CompanyController');


Route::get('/home', 'HomeController@index');
Route::get('/create', 'Dev_dashboardController@store');

Route::get('social/login/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('social/login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/developer', 'ProfileController@developer');

Route::get('/profile/company', 'CompanyController@setup');
Route::post('/profile/company', 'CompanyController@setup');

Route::get('/dashboard', 'Dev_dashboardController@index');
Route::get('/project', 'Dev_dashboardController@create');
Route::get('/project/profile/{profile}', 'Dev_dashboardController@edit');
Route::post('/update/{profile}', 'Dev_dashboardController@update');
Route::get('/logout', 'Dev_dashboardController@destroy');

Route::post('/proposal', 'ProposalController@create');