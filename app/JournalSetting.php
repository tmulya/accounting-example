<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalSetting extends Model
{
    protected $fillable = ['name','chart_code','formula','transaction','queue'];

    public $incrementing = false;

    public function chart()
    {
    	return $this->belongsTo('App\Chart','chart_code','chart_code');
    }
}
