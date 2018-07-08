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
      'category',
      'company_id',
      'logo',
      'product_1',
      'product_2',
      'product_3',
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
