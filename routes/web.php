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

Route::get('/', function () {
    return view('layouts.home');
})->middleware('siteFolder');

// Route::get('/password', function () {
//     return view('layouts.home');
// });

Route::group(['middleware' => ['web', 'auth', 'access']], function(){

  Route::get('/admin', function(){
    $users['users'] = Auth::user();
    return view('layouts.admin', $users);
  });

  Route::get('/admin/{any}', 'Admin\AdminSpaController@index')->where('any', '.*');
});

Route::get('/user', function(){
  $user = Auth::user()->name;
  return view('users.home')->with('name', $user);
});

Route::resource('statistica', 'StatisticsController');

Route::get('/warning', function(){
  return view('warning');
});

Route::get('/categories', function () {
    echo "categories";
});

