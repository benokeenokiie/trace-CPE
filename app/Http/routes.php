<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('auth/login');
// });


Route::auth();


// GoogleMap
Route::get('api/map', function(){
	return view('api.map');
}); //resources/views/api/map

// Home
Route::get('/', 'HomeController@index');


// Charts
Route::get('month-charts', 'ChartsController@monthlychart');
Route::get('daily-charts', 'ChartsController@dailychart');
Route::get('yearly-charts', 'ChartsController@yearlychart');

// DataTables
Route::controller('api/datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);

// Route::post('api/login', 'UserController@index');

Route::group(['middleware' =>['cors']], function() {
	Route::post('api/locateUser', 'UserLocationController@locateUser');
	Route::resource('test', 'TestController');
});









