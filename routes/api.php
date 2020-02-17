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
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => ['cors']], function () {

    Route::get('treatments', function() {
        return App\Treatment::with('subservice.service')->get();
    });

    Route::get('treatments/{id}', function($id) {
        return App\Treatment::where('id',$id)->with('subservice.service')->get();
    });
});