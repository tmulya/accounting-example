<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VehicleSales extends Model
{
	protected $fillable = ['sales_no','sales_date','vehicle_id','type_id','leasing_no','price_otr','price_bbn','price_disc','price_dp'];

	public $table = 'vehicle_sales';

	public $incrementing = false;

	public function vehicle()
	{
		return $this->belongsTo('App\Vehicle');
	}

    public function type()
    {
        return $this->belongsTo('App\VehicleSalesType');
    }

    public function leasing()
    {
        return $this->belongsTo('App\Leasing', 'leasing_no','leasing_no');
    }
	public function scopeMaxno($query)
    {
        $year=substr(date('Y'), 2);
        $queryMax =  $query->select(DB::raw('SUBSTRING(`sales_no` ,7) AS kd_max'))
            ->where(DB::raw('MONTH(sales_date)'), '=', date('m'))
            ->where(DB::raw('YEAR(sales_date)'), '=', date('Y'))
            ->orderBy('sales_no', 'asc')
            ->get();

        $arr1 = array();
        if ($queryMax->count() > 0) {
            foreach ($queryMax as $k=>$v)
            {
                $arr1[$k] = (int)$v->kd_max;
            }
            $arr2 = range(1, max($arr1));
            $missing = array_diff($arr2, $arr1);
            if (empty($missing)) {
                $tmp = end($arr1) + 1;
                $kd_fix = sprintf("%04s", $tmp);
            }else{
                $kd_fix = sprintf("%04s", reset($missing));
            }
        }
        else{
            $kd_fix = '0001';
        }

        return 'FK'.$year.date('m').$kd_fix;
    }
}
