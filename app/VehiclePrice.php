<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclePrice extends Model
{
    protected $fillable = ['vehicle_id','price_hpp','price_otr','price_off','price_bbn','price_disc','price_date'
    ];

    public $timestamps = false;

    public function vehicle()
    {
    	return $this->belongsTo('App\Vehicle');
    }
}
