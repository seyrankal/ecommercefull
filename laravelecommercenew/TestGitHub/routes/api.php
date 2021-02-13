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

Route::get('/hello', function () {
    return "Merhaba Restful API";
});

Route::get('test_api', 'Test_ApiController@test_api');

Route::get('test_api/{id}', 'Test_ApiController@test_apiById');

Route::post('/test_api', 'Test_ApiController@test_apiSave');
