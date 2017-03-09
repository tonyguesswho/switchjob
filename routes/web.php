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
Route::get('social/login/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('social/login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/developer', 'ProfileController@developer');
Route::get('/profile/company', 'CompanyController@setup');
Route::post('/profile/company', 'CompanyController@store');
//Route::post('/profile/company', 'CompanyController@store');
Route::get('/logout','Auth\LoginController@logout');
Route::get('company/dashboard','CompanyController@dashboard');
Route::get('company/dev','CompanyController@dev');
Route::get('company/payment','CompanyController@payment');
Route::get('company/profile','CompanyController@profile');
Route::get('company/project','CompanyController@project');
Route::get('company/projectdetail','CompanyController@projectdetail');