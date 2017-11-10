<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\VehiclePrice;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('vehicle.stock.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.stock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = new Vehicle();
        $v->id = Uuid::uuid4()->getHex();
        $v->frame_no = $request->input('frame_no');
        $v->engine_no = $request->input('engine_no');
        $v->vehicle_code = $request->input('vehicle_code');
        $v->vehicle_name = $request->input('vehicle_name');
        $v->vehicle_color = $request->input('vehicle_color');
        $v->ext_no = $request->input('ext_no');
        $v->save();

        $vp = new VehiclePrice();
        $vp->vehicle_id = $v->id;
        $vp->price_hpp = $request->input('price_hpp');
        $vp->price_otr = $request->input('price_otr');
        $vp->price_off = $request->input('price_off');
        $vp->price_bbn = $request->input('price_bbn');
        $vp->price_disc = $request->input('price_disc');
        $vp->price_date = $request->input('date');
        $vp->save();

        return redirect('vehicle/stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);

        return view('vehicle.stock.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $v = Vehicle::find($id);
        $v->frame_no = $request->input('frame_no');
        $v->engine_no = $request->input('engine_no');
        $v->vehicle_code = $request->input('vehicle_code');
        $v->vehicle_name = $request->input('vehicle_name');
        $v->vehicle_color = $request->input('vehicle_color');
        $v->ext_no = $request->input('ext_no');
        $v->save();

        $vp = VehiclePrice::where('vehicle_id', $v->id)->first();
        $vp->price_hpp = $request->input('price_hpp');
        $vp->price_otr = $request->input('price_otr');
        $vp->price_off = $request->input('price_off');
        $vp->price_bbn = $request->input('price_bbn');
        $vp->price_disc = $request->input('price_disc');
        $vp->price_date = $request->input('date');
        $vp->save();

        return redirect('vehicle/stock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
