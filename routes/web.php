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

// Route::get('/', function () {
//     return view('welcome');
// });


// ko chay
// Route::get('/hello', function(){
//     return view('hello');
// });

Route::get('/hello', function(){
    return ('hello');
});

Route::get('/welcome', function(){
    return 'Chào mừng các bạn đã đến với toidicode.com';
});

Route::get('/welcomee', 'Danh@index');

Route::get('/welcome{value}', 'Danh@index2');

Route::get('/welcome/{name}/{age}', 'Danh@welcome');

Route::get('/welcomeee', 'Danh@index3');



// Route::post('login','LoginController@postLogin');




Route::get('/id/{$id}','HomeController@showId');

Route::get('page', function () {
    return view('header');
});

//-------------------------------------------------------------------------------------------


Route::post('register', [ 'as' => 'register', 'uses' => 'Auth\RegisterController@postRegister']);
Route::get('','HomeController@getIndex');
Route::get('login','LoginController@getLogin');
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@postLogin']);
Route::get('logout','LogoutController@getLogout');
Route::get('posts/view/{id}', 'PostController@view' );

Route::get('register', 'Auth\RegisterController@getRegister');

Route::get('users', function() {
    return view('admin.user.view');
});

