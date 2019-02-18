<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Produk extends Model
{
	use SoftDeletes;
    //
    protected $fillable	= ['nama', 'pengaturan'];
	protected $hidden	= ['pengaturan', 'created_at', 'updated_at', 'deleted_at', 'harga_saat_ini', 'promo_saat_ini'];
	protected $dates	= [];
	protected $casts	= ['pengaturan' => 'array'];
	protected $appends 	= ['thumbnail', 'galeri', 'harga', 'promo', 'rating'];

	public function harga_saat_ini(){
		return $this->hasOne(Harga::class, 'produk_id')->where('label', 'normal')
		->wherenull('hingga')->where('mulai', '<=', Carbon::now())->orderby('mulai', 'desc');
	}

	public function promo_saat_ini(){
		return $this->hasOne(Harga::class, 'produk_id')->where('label', 'promo')
		->where('mulai', '<=', Carbon::now())->orderby('mulai', 'desc');
	}

	public function produkgrup(){
		return $this->hasMany(ProdukGrup::class, 'produk_id');
	}

	public function getThumbnailAttribute($variable){
		return $this->pengaturan['thumbnail'];
	}

	public function getGaleriAttribute($variable){
		return $this->pengaturan['gallery'];
	}

	public function getRatingAttribute($variable){
		return $this->pengaturan['rating'];
	}

	public function getHargaAttribute($variable){
		return $this->harga_saat_ini['harga'];
	}

	public function getPromoAttribute($variable){
		return $this->promo_saat_ini;
	}

	public static function getReview($angka){
		// $angka 	= rand(0,9);
		$data 	= null;
		$faker	= \Faker\Factory::create();

		foreach (range(0, $angka) as $k) {
			$data[$k]['nama']		= $faker->name;
			$data[$k]['thumbnail']	= $faker->imageUrl($width = 400, $height = 200);
			$data[$k]['rating']['indikator']	= 5;
			$data[$k]['rating']['user_rate']	= rand(1,5);
			$data[$k]['tanggal']	= (string)Carbon::now()->addhours(rand(1,5));
			$data[$k]['komentar']	= $faker->text;
		}

		return $data;
	}
}
