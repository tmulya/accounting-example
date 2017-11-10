<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleSalesPayment extends Model
{
    protected $fillable = ['payment_price','payment_date','payment_type','bank_id','sales_no'];

    public $incrementing = false;

    public function sales()
    {
    	return $this->belongsTo('App\VehicleSales', 'sales_no','sales_no');
    }
}
