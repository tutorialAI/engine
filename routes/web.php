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
    // return view('layouts.home');
    echo  "middleware is successfully working";
})->middleware('siteFolder');

// Route::get('/password', function () {
//     return view('layouts.home');
// });

Route::group(['middleware' => ['web', 'auth']], function(){

  Route::get('/admin', function(){
    $users['users'] = Auth::user();
        return view('layouts.admin', $users);
  });
});

Route::resource('statistica', 'StatisticsController');

Route::get('/warning', function(){
  return view('warning');
});

Route::get('/categories', function () {
    echo "categories";
});

Route::get('/admin/{any}', 'Admin\AdminSpaController@index')->where('any', '.*');
