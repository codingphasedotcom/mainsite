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

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', 'admin\DashboardController@index');

//Channels
Route::resource('/admin/channels', 'admin\ChannelController');

//STACKS
Route::resource('/admin/stacks', 'admin\StacksController');
Route::get('/admin/stacks/{stack_id}/add-skills', 'admin\StacksController@addSkills');

//SKILLS
Route::resource('/admin/skills', 'admin\SkillsController');

//Podcasts
Route::resource('/admin/podcasts', 'admin\PodcastsController');


Route::get('/admin/example', 'admin\DashboardController@example');




Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');
Route::get('/resources', 'ResourcesController@index');
Route::get('/podcasts', 'PodcastsController@index');
Route::resource('projects', 'ProjectsController');
Route::resource('projects', 'ProjectsController');

Route::get('/stacks', 'StacksController@index');
Route::get('/stacks/{mean}', 'StacksController@show');
Route::get('/stacks/{mean}/{skill}', 'SkillsController@index');
Route::get('/stacks/{mean}/{skill}/{video}', 'SkillsController@show');

Route::get('/journey/frontend', 'journeys\JourneyController@frontend');
Route::get('/journey/frontend/html', 'journeys\JourneyController@adventures');

Route::get('/channels', 'ChannelController@index');
Route::get('/channels/submit', 'ChannelController@create')->middleware('auth');
Route::post('/channels/submit', 'ChannelController@store')->middleware('auth');

Route::get('/channels/{channel}', 'PostController@index');

Route::get('/channels/{channel}/new-blog', 'PostController@newblog')->middleware('auth');
Route::get('/channels/{channel}/new-link', 'PostController@newlink')->middleware('auth');
Route::get('/channels/{channel}/new-question', 'PostController@newquestion')->middleware('auth');
Route::get('/channels/{channel}/{post}', 'PostController@show');
Route::get('/channels/{channel}/{post}/edit', 'PostController@edit');
Route::get('/channels/submit', 'ChannelController@create');
