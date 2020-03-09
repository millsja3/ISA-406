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
//
//Route::get('/', function () {
//    return view('welcome');
//});

$middleware = ['cas.miamioh'];
$middleware_not_test = ['cas.miamioh'];
// Global Logout route
Route::get('/logout', 'Auth\LogOutController@logout');

// Global Route to handle the CAS connectivity issues
Route::get('/apperror', function () {
    return view('errors.500');
});

Route::group(['prefix' => config('isaScholarship.route_path'), 'namespace' => 'ISAScholarship', 'middleware' => 'cas.miamioh'], function () {
    //Student View
    Route::get('/', 'ISAScholarshipController@index');
    Route::get('/confirm', 'ISAScholarshipController@confirm');
    //Admin View
});