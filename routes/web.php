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
Route::get('/admin', 'Admin\DashboardController@index');

//Channels
Route::resource('/admin/channels', 'Admin\ChannelController');

//STACKS
Route::resource('/admin/stacks', 'Admin\StacksController');
Route::get('/admin/stacks/{stack_id}/add-skills', 'admin\StacksController@addSkills');

//SKILLS
Route::resource('/admin/skills', 'Admin\SkillsController');

//Podcasts
Route::resource('/admin/podcasts', 'Admin\PodcastsController');


Route::get('/admin/example', 'Admin\DashboardController@example');




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
Route::post('/channels/{channel}/submit', 'PostController@store')->middleware('auth');
Route::get('/channels/{channel}/{post}', 'PostController@show');
Route::get('/channels/{channel}/{post}/edit', 'PostController@edit');
Route::post('/channels/{channel}/{post}/comment', 'CommentController@store')->middleware('auth');
Route::get('/channels/submit', 'ChannelController@create');

// Relationships
Route::get('/followchannel/{channel}', 'RelationshipsController@followChannel')->middleware('auth');

Route::get('sitemap', 'SitemapsController@index');
Route::get('sitemap/posts', 'SitemapsController@posts');