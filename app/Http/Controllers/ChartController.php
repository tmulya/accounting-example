<?php

namespace App\Http\Controllers;

use App\Chart;
use App\ChartGroup;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charts = Chart::all();

        return view('chart.index', compact('charts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group_list = ChartGroup::select('name','id')->get();
        $chart_list = Chart::whereNull('sub_chart')->get();

        return view('chart.create', compact('group_list', 'chart_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->input('sub_chart'))) {
            $chart = new Chart();  
            $chart->id = Uuid::uuid4()->getHex();
            $chart->chart_code = $request->input('chart_code');
            $chart->sub_chart = $request->input('sub_chart');
            $chart->chart_name = $request->input('chart_name');
            $chart->transaction = $request->input('transaction');
            $chart->group_id = $request->input('group_id');
            $chart->save();
        }else{
            $chart = new Chart();  
            $chart->id = Uuid::uuid4()->getHex();
            $chart->chart_code = $request->input('chart_code');
            $chart->sub_chart = $request->input('sub_chart');
            $chart->chart_name = $request->input('chart_name');
            $chart->transaction = $request->input('transaction');
            $chart->group_id = $request->input('group_id');
            $maxSubno = $chart->where('sub_chart', $chart->sub_chart)->max('subno');
            $chart->subno = $maxSubno + 1;
            $chart->save();
        }

        return redirect('charts');
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
        $chart = Chart::find($id);
        $group_list = ChartGroup::select('name','id')->get();
        $chart_list = Chart::whereNull('sub_chart')->get();

        return view('chart.edit', compact('chart','group_list', 'chart_list'));
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
        $chart = Chart::find($id);
        $chart->chart_code = $request->input('chart_code');
        $chart->sub_chart = $request->input('sub_chart');
        $chart->chart_name = $request->input('chart_name');
        $chart->transaction = $request->input('transaction');
        $chart->group_id = $request->input('group_id');
        $chart->save();

        return redirect('charts');
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
