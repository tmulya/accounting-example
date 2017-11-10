<?php

use App\Leasing;
use App\Vehicle;
use App\VehiclePrice;
use App\VehicleSalesType;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = Carbon\Carbon::now();

        $v = new Vehicle();
        $v->id = Uuid::uuid4()->getHex();
        $v->frame_no = 'JK0283UO42J3LK';
        $v->engine_no = 'MH902349234';
        $v->vehicle_code = 'C15';
        $v->vehicle_name = 'CBR 150 R';
        $v->vehicle_color = 'RED';
        $v->ext_no = '55566355';
        $v->save();

        $vp = new VehiclePrice();
        $vp->vehicle_id = $v->id;
        $vp->price_hpp = 11000000;
        $vp->price_otr = 15000000;
        $vp->price_off = 14000000;
        $vp->price_bbn = 2000000;
        $vp->price_disc = 500000;
        $vp->price_date = $now;
        $vp->save();

        VehicleSalesType::create(['name'=>'Cash']);
        VehicleSalesType::create(['name'=>'Credit']);

        $leasing = new Leasing();
        $leasing->id = Uuid::uuid4()->getHex();
        $leasing->leasing_no = 'FIF';
        $leasing->name = 'FIF';
        $leasing->save();
        
    }
}
