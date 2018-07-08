<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'slug','goal','rut','user_id','avatar'
  ];

	/**
	* Returns the user acording to user_id
	*
	* @return \App\User
	*/
	public function user()
	{
		return $this->belongsTo('App\User');
	}

  public function solicitud()
  {
      return $this->hasMany('App\Solicitud');
  }
}
