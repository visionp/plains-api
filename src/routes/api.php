<?php

use App\Http\Controllers\Api\PlainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group(
    [
        'prefix' => '/v1',
        'namespace' => 'App\Http\Controllers\Api',
        'as' => 'api.',
    ], function () {

    Route::get('/plain', [PlainController::class, 'list']);
});
