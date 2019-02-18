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
}
