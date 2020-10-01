<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
	protected $table = 'schedule';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//protected
	public $fillable = [
		'scheduleddate','drycleaning','washfold','hangdry','status'
	];
}