<?php

Route::get('/', ['middleware' => ['web','guest'], function () {
    return view('welcome');
}]);

Route::get('images/{filename}', function ($filename)
{
    $path = storage_path() . '/app/images/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::group(['middleware' => 'web','namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', [ 'as' => 'admin.dashboard', function(){
    	return view('admin.dashboard');
    }]);

    Route::get('source/{source}/refresh', ['as' => 'admin.source.refresh', 'uses' => 'NewsController@getArticles'] );
    Route::get('source/{source}/confirm', ['as' => 'admin.source.confirm', 'uses' => 'SourceController@confirm'] );
    Route::resource('source', 'SourceController');

    Route::get('category/{category}/confirm', ['as' => 'admin.category.confirm', 'uses' => 'CategoryController@confirm'] );
    Route::resource('category', 'CategoryController');

    Route::get('user/{user}/confirm', ['as' => 'admin.user.confirm', 'uses' => 'UserController@confirm'] );
    Route::resource('user', 'UserController');

    Route::get('news', ['uses' => 'ArticleController@getArticles']);
    Route::get('og', ['uses' => 'NewsController@getOg']);
    
    

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/details', 'HomeController@details');
});
