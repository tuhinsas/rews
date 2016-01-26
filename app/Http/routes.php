<?php

Route::get('/', ['middleware' => ['web','guest'], function () {
    return view('welcome');
}]);


Route::group(['middleware' => 'web','namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', [ 'as' => 'admin.dashboard', function(){
    	return view('admin.dashboard');
    }]);

    Route::get('admin/source/{source}/confirm', ['as' => 'admin.source.confirm', 'uses' => 'SourceController@confirm'] );
    Route::resource('source', 'SourceController');

    Route::get('admin/category/{category}/confirm', ['as' => 'admin.category.confirm', 'uses' => 'CategoryController@confirm'] );
    Route::resource('category', 'CategoryController');

    Route::get('admin/user/{user}/confirm', ['as' => 'admin.user.confirm', 'uses' => 'UserController@confirm'] );
    Route::resource('user', 'UserController');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
