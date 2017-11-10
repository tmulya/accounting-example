<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['frame_no','engine_no','vehicle_code','vehicle_name','vehicle_color','ext_no'];

    public $incrementing = false;

    public function prices()
    {
    	return $this->hasMany('App\VehiclePrice');
    }

    public function sales()
    {
    	return $this->hasOne('App\VehicleSales');
    }
}
