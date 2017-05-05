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

Route::group(['prefix' => 'admin'], function() {
	Route::get('/index', 'CentralAdminController@index');
	Route::match(['get', 'post'], '/users', 'CentralAdminController@users');
	Route::match(['get', 'post'], '/developers', 'CentralAdminController@developers');
	Route::match(['get', 'post'], '/company', 'CentralAdminController@company');
	Route::match(['get', 'post'], '/pairing_management', 'CentralAdminController@pairingManagement');
	Route::match(['get', 'post'], '/payment_management', 'CentralAdminController@paymentManagement');
	Route::match(['get', 'post'], '/transactions', 'CentralAdminController@transactions');
    Route::post('/update_status/{id}', 'CentralAdminController@updateStatus');
	Route::match(['get', 'post'], '/view_developer/{id}', 'CentralAdminController@viewDeveloper');


});

Auth::routes();
Route::get('/', 'HomeController@index');

Route::resource('invites', 'InvitesController');
Route::resource('jobs', 'jobsController');

Route::resource('developer-skills', 'DeveloperSkillsController');
Route::resource('skills', 'SkillsController');
Route::resource('live-projects', 'LiveProjectsController');
Route::resource('companies', 'CompanyController');




Route::get('/home', 'HomeController@index');

Route::get('social/login/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('social/login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/developer', 'ProfileController@developer');


Route::post('/profile/companies', 'CompanyController@setup');
Route::post('/profile/setup','CompanyController@store');

Route::get('/dashboard', 'Dev_dashboardController@index');
Route::get('/project', 'Dev_dashboardController@create');
Route::get('/profile/{profile}', 'Dev_dashboardController@edit');
Route::post('/update/{profile}', 'Dev_dashboardController@update');
//Route::get('/create', 'Dev_dashboardController@store');
Route::get('/payment', 'Dev_dashboardController@payment');
Route::post('/progress','Dev_dashboardController@progress');
Route::post('/proposal/{proposal}', 'ProposalController@create');
Route::post('/developer/socials/{id}', 'Dev_dashboardController@socialdetails_update');
Route::post('/developer/account/{id}', 'Dev_dashboardController@account_update');
Route::post('/developers/{id}', 'DevelopersController@store');


Route::post('/profile/company', 'CompanyController@store');

Route::get('/logout','Auth\LoginController@logout');
Route::get('company/dashboard','CompanyController@dashboard');
Route::get('company/dev','CompanyController@dev');
Route::get('company/payment','CompanyController@payment');
Route::get('company/profile','CompanyController@profile');
Route::get('company/project','CompanyprojectController@projects');
Route::post('company/addproject','CompanyprojectController@addproject');
Route::get('company/projectdetail/{id}','CompanyController@projectdetail');
Route::post('company/projectupdate/{id}','CompanyprojectController@update');
Route::get('company/projectdesc/{id}','CompanyController@projectdesc');


Route::post('company/invite/{id}','CompanyController@companyinvite');
Route::post('company/addmilestone/{id}','MilestoneController@store');
Route::get('company/deletemilestone/{id}','MilestoneController@destroy');

/**
 * Verify user email route
 */
Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

//Route::get('/test', function (){
//    return view('email.verifyEmailFirst');
//});

//Route::post('company/addmilestone','MilestoneController@p');







