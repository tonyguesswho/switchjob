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




Route::get('/home', 'HomeController@index');



Route::get('social/login/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('social/login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/developer', 'ProfileController@developer');
//Route::get('/profile/company', 'CompanyController@setup');

Route::post('/profile/company', 'CompanyController@setup');
Route::post('/profile/setup','CompanyController@store');

Route::get('/dashboard', 'Dev_dashboardController@index');
Route::get('/project', 'Dev_dashboardController@create');
Route::get('/profile/{profile}', 'Dev_dashboardController@edit');
Route::post('/update/{profile}', 'Dev_dashboardController@update');
Route::get('/create', 'Dev_dashboardController@store');
Route::get('/payment', 'Dev_dashboardController@payment');
Route::post('/proposal/{proposal}', 'ProposalController@create');

//Route::post('/profile/company', 'CompanyController@store');
//Route::post('/profile/company', 'CompanyController@store');
Route::get('/logout','Auth\LoginController@logout');
Route::get('company/dashboard','CompanyController@dashboard');
Route::get('company/dev','CompanyController@dev');
Route::get('company/payment','CompanyController@payment');
Route::get('company/profile','CompanyController@profile');
Route::get('company/project','CompanyController@project');
Route::get('company/projectdetail','CompanyController@projectdetail');
Route::get('company/projectdesc','CompanyController@projectdesc');

Route::post('company/invite/{id}','CompanyController@companyinvite');
Route::post('company/milestone','MilestoneController@post');

