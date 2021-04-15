<?php

use App\Http\Controllers\MpesaController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('v1/access/token', [MpesaController::class,'generateAccessToken']);
Route::post('v1/stk/push', [MpesaController::class,'customerMpesaSTKPush'])->name('payus');
Route::post('v1/stk/push/callback', [MpesaController::class,'MpesaRes']);
Route::post('v1/validation',  [MpesaController::class,'mpesaValidation']);
Route::post('v1/transaction/confirmation',  [MpesaController::class,'mpesaConfirmation']);
Route::post('v1/register/url',  [MpesaController::class,'mpesaRegisterUrls']);

