<?php 


Route::middleware('auth:web')->group(function () {
    
    Route::get('admin', function () {
        return redirect('admin/home');
    });
    Route::get('/admin/{any}', 'AdminSpaController@index')->where('any', '.*');

});

Route::get('/flush', function () {
    Session::flush();
    return redirect('/login');
});