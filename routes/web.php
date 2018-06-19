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

Route::resource('task', 'TaskController');



Route::get('getTasks', 'TaskController@getTasks');


Route::post('toggleTask', 'TaskController@toggleTask');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//https://laracasts.com/discuss/channels/vue/how-do-i-handle-loginregistration-and-sessions-with-vue-router-and-axios-for-an-spa?page=1
Route::get('/sessionStatus', function() {
    return ['user' => Auth::user() ? Auth::user() : null];
});

Route::get('logoutUser', 'UserController@logoutUser');


Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');