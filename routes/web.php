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

// Routes if user administrator and authorized

Route::group(['middleware' => ['web', 'auth']], function(){

  Route::get('/admin', function(){
    $users['users'] = Auth::user();
    switch (Auth::user()->access) {
      case 1:
        return view('dashboard.admin', $users);
        break;
      case 2:
        return view('dashboard.copyrighter', $users);
        break;
      case 3:
        return view('dashboard.moderator', $users);
        break;
      default:
        return view('users.home');
        break;
    }
  });

  Route::get('/admin/video', 'VideosController@index');
  Route::get('/admin/video/get', 'VideosController@getVideos');
});

Route::resource('statistica', 'StatisticsController');

Route::get('/warning', function(){
  return view('warning');
});

Route::get('/categories', function () {
    echo "categories";
});

