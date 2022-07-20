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

/**
 * 示例，该接口作为示范，不可调用
 */
Route::prefix('users')->group(function () {
    Route::post('login', 'UsersController@login');  //用户登录
    Route::post('registered', 'UsersController@registered');  //用户注册
    Route::post('again', 'UsersController@again');  //修改用户密码
});



