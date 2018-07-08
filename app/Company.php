<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'companyName', 'companySlug','user_id','verified',
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

  /**
  * Returns the Company Form acording to this company
  *
  * @return \App\Teacher
  */
  public function companyform()
  {
      return $this->hasOne('App\CompanyForm');
  }
}
