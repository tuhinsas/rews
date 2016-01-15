<?php

Route::get('/', ['middleware' => ['web','guest'], function () {
    return view('welcome');
}]);


Route::group(['middleware' => 'web','namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', [ 'as' => 'admin.dashboard', function(){
    	return view('admin.dashboard');
    }]);

    Route::resource('source', 'SourceController');


});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
