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

Route::get('/produk', function () {

	$ppage 	= (request()->has('per_page') ? request()->get('per_page') : 12);

	$data 	= App\Produk::with(['harga_saat_ini', 'promo_saat_ini'])->paginate($ppage);
	$data->appends(request()->only('per_page', 'page'));

    return response()->json($data);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
