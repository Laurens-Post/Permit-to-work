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

/*Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/tasks', 'TasksController@index');
    Route::get('/tasks/edit', 'PagesController@edit');
    Route::get('/tasks/show', 'PagesController@show');
	Route::get('form-validation', 'PagesController@formValidation');
	Route::post('form-validation', 'PagesController@formValidationPost');
}); */

/* Home route */
Route::get('/dashboard', [
    'as' => 'dashboard',
    'uses' => 'PagesController@home'
]);

/* POST endpoint route  */
Route::group(['middleware' => ['web']], function () {
Route::resource('/tasks', TasksController::class);
Route::post('/work', array('as' => 'work.store', 'uses' => 'ProtectionController@store'));
Route::post('/environment', array('as' => 'environmentapi.store', 'uses' => 'EnvironmentController@store'));
Route::post('/precautions', array('as' => 'precautionsapi.store', 'uses' => 'PrecautionsController@store'));
Route::get('/work', 'PagesController@work');
Route::get('/description', 'PagesController@description');

/* Feedback Endpoints */
//  Route::get('/protectionfb', 'ProtectionfbController@protectionfbs');
});



//Route::resource('/tasks/edit', TasksController::class);
//Route::resource('/tasks/create2', TasksController::class);
//::resource('/tasks/show', TasksController::class);
// Route::post('form-validation', 'TasksController@formValidationPost');
//Route::get('/', 'ListController@show');
//Route::resource('/tasks', TasksController::class);
//Route::resource('/tasks/edit', TasksController::class);
//Route::resource('/tasks/create2', TasksController::class);
//Route::resource('/tasks/show', TasksController::class);

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/* GET endpoint route */
Route::resource('/v1/permits', v1\PermitController::class, [
	'except' => ['create', 'edit']
]);

Route::resource('/v1/protection', v1\ProtectionController::class);
Route::resource('/v1/environment', v1\EnvironmentController::class);
Route::resource('/v1/precautions', v1\PrecautionsController::class);
Route::resource('/v1/protectionfb', v1\ProtectionfbController::class);
Route::resource('/v1/environmentfb', v1\EnvironmentfbController::class);
Route::resource('/v1/precautionfb', v1\PrecautionfbController::class);

