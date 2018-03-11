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

Route::get('/', function () {
    return redirect('home');
});


Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function (){
        Route::group([
            'namespace' => 'Admin\\',
            'as' => 'admin.',
            'middleware' => 'role:sadmin'
        ], function (){
            Route::resource('users', 'UsersController');
            Route::resource('county', 'CountyController');
        });
    });
});
