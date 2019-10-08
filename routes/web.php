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

Route::group(['middleware' => ['web', 'auth']], function(){
  Route::get('/', function () {
      return view('layouts.app');
  });

  Route::get('/admin', function(){
    if (Auth::user()->access > 0) {
      $users['users'] = Auth::user();
      return view('admin.dashboard', $users);
    } else {
      echo "Not Admin";
    }
  });
});

Route::get('/warning', function(){
  return view('warning');
});

Route::get('/categories', function () {
    echo "categories";
});
