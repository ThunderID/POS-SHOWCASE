<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Harga extends Model
{
	use SoftDeletes;
    //
	protected $fillable	= ['label', 'mulai', 'hingga', 'harga', 'pengaturan', 'produk_id'];
	protected $hidden	= ['pengaturan', 'id', 'produk_id', 'label', 'created_at', 'deleted_at', 'updated_at'];
	protected $dates	= ['mulai', 'hingga'];
	protected $casts	= ['pengaturan' => 'array'];
	protected $appends 	= ['judul'];

	public function getJudulAttribute($variable){
		return $this->pengaturan['judul'];
	}
}
