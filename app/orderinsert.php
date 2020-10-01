<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderinsert extends Model
{
	protected $table = 'order';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'scheduledate', 'servicetype','status',
	];
}