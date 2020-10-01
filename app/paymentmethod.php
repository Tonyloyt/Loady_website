<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paymentmethod extends Model
{
    protected $table = 'paymentmethod';
    public $timestamps = true;
    public $fillable = [
		'card','month','year','cvv','cardname','mybilling','address','apt','zipcode','city','status','clientid'
	];
}
