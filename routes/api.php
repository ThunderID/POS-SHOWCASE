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

	//kategori
	$data 	= new App\Produk;

	if(request()->has('cari')){
		$data 	= $data->where('nama', 'like', '%'.request()->get('cari').'%');
	}

	if(request()->has('kategoriId')){
		$data 	= $data->wherehas('produkgrup', function($q){
			$q->where('grup_id', request()->get('kategoriId'));
		});
	}

	if(request()->has('filterId')){
		$data 	= $data->wherehas('produkgrup', function($q){
			$q->where('grup_id', request()->get('filterId'));
		});
	}

	if(request()->has('promoId')){
		$data 	= $data->wherehas('produkgrup', function($q){
			$q->where('grup_id', request()->get('promoId'));
		});
	}

	$data 	= $data->with(['harga_saat_ini', 'promo_saat_ini'])->paginate($ppage);
	$data->appends(request()->only('per_page', 'page', 'kategoriId', 'filterId', 'promoId'));

    return response()->json($data);
});


Route::get('/produk/{id}', function ($id) {
	$data 	= App\Produk::find($id)->toarray();

	$data['deskripsi']		= \Faker\Factory::create()->text;

	$seri 	= App\ProdukGrup::wherehas('grup', function($q){
		$q->where('jenis', 'series');
	})->first();

	if($seri){
		$series 	= App\ProdukGrup::where('grup_id', $seri->grup_id)->where('produk_id', '<>', $seri->produk_id)->get(['produk_id'])->toarray();
		$seri_id	= array_column($series, 'produk_id');
		$data['seri']['nama'] 		= $seri['grup']['nama'];
		$data['seri']['produk'] 	= App\Produk::whereIn('id', $seri_id)->with(['harga_saat_ini', 'promo_saat_ini'])->get();
	}else{
		$data['seri']	= null;
	}

	$frek 	= request()->get('take_review');

	$data['review']		= App\Produk::getReview(min($frek, $data['rating']['frekuensi']));

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
