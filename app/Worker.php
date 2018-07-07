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
      'slug','goal','rut','verified'
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
}
