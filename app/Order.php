<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
				//
	protected $table = 'orders';
	protected $primaryKey = 'id';
	protected $keyType = 'integer';
	protected $fillable = [
		'product','price','cashier', 'category'
	];
	//protected $dateFormat = 'U';
	//public $incrementing = true;
	//public $timestamps = false;

	//const CREATED_AT = 'created_at';
	//const UPDATED_AT = 'updated_at';
}
