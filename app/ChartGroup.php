<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartGroup extends Model
{
    protected $fillable = ['name'];

    public function charts()
    {
    	return $this->hasMany('App\Chart','id','group_id');
    }
}
