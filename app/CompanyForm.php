<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyForm extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name',
      'lastname',
      'email',
      'rut',
      'web',
      'facebook',
      'instagram',
      'twitter',
      'description'
  ];

	/**
	* Returns the user acording to user_id
	*
	* @return \App\User
	*/
	public function company()
	{
		return $this->belongsTo('App\Company');
	}}
