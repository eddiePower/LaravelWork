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

Route::get('/', function () 
{
    return view('welcome');
});

/*
Route::get('/user/{name?}',function($name = 'Eddie'){
   echo "Name: ".$name;
});

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);

Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
*/
Route::get('analytics/dashboard', 'GAnalyticsDashController@index');


//login stuff
Auth::routes();

//position after auth to prevent view unless logged in as valid user in users table.

//main page
Route::get('/home', 'HomeController@index')->name('home');

Route::get('author', 'AuthorViewController@index');
Route::get('author/create', 'AuthorViewController@create');
Route::post('author', 'AuthorViewController@store');
Route::get('author/{id}/edit', 'AuthorViewController@show');
Route::get('author/{id}/delete', 'AuthorViewController@destroy');
Route::post('author/{id}/edit', 'AuthorViewController@edit');

