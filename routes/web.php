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

Route::group(['middleware' => 'auth'], function (){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('contact', 'ContactsController',
                ['only' => ['index', 'edit', 'show', 'create', 'store','update']]);

    Route::resource('account', 'AccountsController',
               ['only' => ['index','edit', 'show','create','store','update']]);

    Route::resource('group', 'GroupsController',
                ['only' => ['index', 'edit', 'show', 'create', 'store']]);

    Route::resource('opportunity', 'OpportunitiesController',
             ['only' => ['index','edit', 'show','create','store','update']]);
    
    Route::resource('user', 'UsersController',
             ['only' => ['index', 'edit', 'show', 'create', 'store']]);

    Route::group(['namespace' => 'Api', 'prefix' => 'api'], function(){
        Route::get('members/search', 'MembersController@search')->name('api.members.search');
               ['only' => ['index','edit', 'show','create','store','update']];

        Route::post('file/submit', 'FilesController@submit')->name('api.file.submit');
    });

    Route::resource('user', 'UsersController',
        ['only' => ['index','edit', 'show','create','store','update']]);

});