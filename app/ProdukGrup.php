<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdukGrup extends Model
{
	use SoftDeletes;
    //
    protected $table	= 'produk_grup';
    protected $fillable	= ['grup_id', 'produk_id'];
	protected $hidden	= ['created_at', 'updated_at', 'deleted_at'];
	protected $dates	= [];
	protected $casts	= [];
	protected $appends 	= [];
}
