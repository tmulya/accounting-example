<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = ['chart_code','debet','credit','description','journal_date'];

    public function chart()
    {
    	return $this->belongsTo('App\Chart','chart_code','chart_code');
    }
}
