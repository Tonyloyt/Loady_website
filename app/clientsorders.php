<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientsorders extends Model
{
    protected $table = 'clientsorders';
    public $timestamps = true;
    public $fillable = [
		'scheduleddate','chk_drycleaning','chk_washfold','chk_hangdry'
	];
}
