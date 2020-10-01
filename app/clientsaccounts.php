<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class clientsaccounts extends Model
{
	
	protected $table = 'users';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//protected
	public $fillable = [
		'name','email','password','mobile','address','zipcode','city'
	];
}

           