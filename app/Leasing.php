<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leasing extends Model
{
    protected $fillable = ['leasing_no','name'];

    public $incrementing = false;

    public function vs()
    {
    	return $this->hasMany('App\VehicleSales', 'leasing_no','leasing_no');
    }
}
