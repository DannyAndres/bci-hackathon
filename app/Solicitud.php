<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'worker_id','company_id', 'facebookPost', 'acepted',
    ];

 	public function worker()
	{
		return $this->belongsTo('App\Worker');
	}
}
