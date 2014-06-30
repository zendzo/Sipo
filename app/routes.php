<?php

Route::group(['before' => 'auth'], function()
{
    #Home
    Route::get('/',['as'=>'home','uses'=>'PagesController@index']);

    #Categories
    Route::resource('/categories','CategoriesController');

    #Projects
    Route::resource('/projects','ProjectsController');

    #summaries - not finish yet
    Route::resource('/summaries','SummariesController');

    #Task - not finish yet
    Route::resource('/tasks','TasksController');

});

#register
Route::get('/register',['uses'=>'RegistrationController@create']);
Route::post('/register',['as'=>'registration.store','uses'=>'RegistrationController@store']);

#Auth
Route::get('/login',['as'=>'login','uses'=>'SessionController@create']);
Route::get('/logout',['as'=>'logout','uses'=>'SessionController@destroy']);
Route::resource('sessions','SessionController',['only'=>['create','store','destroy']]);

#Profile - not finish yet
Route::get('{username}','UserController@show');

Route::get('{username}/{attribute}','UserController@show');