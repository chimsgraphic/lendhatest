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


Route::get('/all-products/', 'Products@products');
Route::post('/delete-product/', 'DeleteProducts@delete');
Route::post('/create-product', 'CreateProducts@create');
Route::get('/update-product/{id}', 'CreateProducts@update');
Route::get('/delete-product/{id}', 'DeleteProducts@delete');
