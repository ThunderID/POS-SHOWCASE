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


Route::get('/produk/{id}', function ($id) {
	$data 	= App\Produk::find($id)->toarray();
	$data['deskripsi']		= 'Samsung Galaxy J2 Prime ready warna Absolute Black dan Metalic Gold<br/>Kondisi 100% Baru dan disegel resmi Samsung <br/> Garansi resmi 1 tahun Samsung Elektronik Indonesia (SEIN)';
 
    return response()->json($data);
});


Route::get('/kategori', function () {

	$kat 	= (request()->has('per_page') ? request()->get('per_page') : 12);

	$data 	= App\Grup::where('jenis', 'kategori')->wherenull('grup_id')->with(['sub'])->paginate($kat);
	$data->appends(request()->only('per_page', 'page'));

    return response()->json($data);
});

Route::get('/filter/{kategoriId}', function () {

	$filt 	= (request()->has('per_page') ? request()->get('per_page') : 12);

	$data 	= App\Grup::where('jenis', 'filter')->wherenull('grup_id')->with(['sub'])->paginate($filt);
	$data->appends(request()->only('per_page', 'page'));

    return response()->json($data);
});


Route::get('/promo', function () {

	$prom 	= (request()->has('per_page') ? request()->get('per_page') : 12);

	$data 	= App\Promo::where('jenis', 'promo')->wherenull('grup_id')->paginate($prom);
	$data->appends(request()->only('per_page', 'page'));

    return response()->json($data);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
