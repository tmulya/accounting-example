<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $fillable = ['chart_code','sub_chart','chart_name','subno','transaction','group_id'];
    
    public $incrementing = false;

    public function group()
    {
    	return $this->belongsTo('App\ChartGroup','group_id','id');
    }
}
