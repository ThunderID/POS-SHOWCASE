<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Grup extends Model
{
	use SoftDeletes;
    //
    protected $table	= 'grups';
    protected $fillable	= ['grup_id', 'nama', 'jenis', 'mulai', 'hingga', 'pengaturan'];
	protected $hidden	= ['pengaturan', 'created_at', 'updated_at', 'deleted_at', 'grup_id', 'mulai', 'hingga', 'jenis'];
	protected $dates	= ['mulai', 'hingga'];
	protected $casts	= ['pengaturan' => 'array'];
	protected $appends 	= ['thumbnail'];


	public function sub(){
		return $this->hasMany(Grup::class, 'grup_id')->where('mulai', '<=', Carbon::now())->orderby('nama', 'asc');
	}

	public function getThumbnailAttribute($variable){
		return $this->pengaturan['thumbnail'];
	}
}
