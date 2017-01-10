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

Route::resource('invites', 'InvitesController');
Route::resource('jobs', 'jobsController');
Route::resource('developers', 'DevelopersController');
Route::resource('developer-skills', 'DeveloperSkillsController');
Route::resource('skills', 'SkillsController');