<?php

namespace App\Http\Controllers;

use App\Chart;
use App\Journal;
use App\VehicleSales;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ext = $request->input('ext');
        if (empty($ext)) {
            $journal = Journal::all();
        }else{
            $journal = Journal::where('ext_no', $ext)->get();
        }
        

        return view('journal.index', compact('journal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chart_list = Chart::whereNull('sub_chart')->get();

        return view('journal.create', compact('chart_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vs = new VehicleSales();
        $vs->sales_no = $request->input('sales_no');
        $vs->sales_date = $request->input('sales_no');
        $vs->vehicle_id = $request->input('sales_no');
        $vs->type_id = $request->input('sales_no');
        $vs->leasing_no = $request->input('sales_no');
        $vs->price_otr = $request->input('sales_no');
        $vs->price_bbn = $request->input('sales_no');
        $vs->price_disc = $request->input('sales_no');
        $vs->save();
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
        //
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
        //
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
