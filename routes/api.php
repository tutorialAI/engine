<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace_prefix' => 'Admin'], function(){
	Route::get('sites/', 'Admin\SiteListController@show');
	Route::get('users/', 'Admin\UsersController@show');
	Route::get('video/', 'Admin\VideoController@getVideo');
	Route::get('categories/', 'Admin\CategoriesController@show');
});
