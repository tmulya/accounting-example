<?php

namespace App\Http\Controllers;

use App\Chart;
use App\JournalSetting;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class JournalSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $js = JournalSetting::orderBy('name','asc')->orderBy('queue','asc')->get();

        return view('journal.setting.index', compact('js'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chart_list = Chart::all();

        return view('journal.setting.create', compact('chart_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $js = new JournalSetting();
        $js->id = Uuid::uuid4()->getHex();
        $js->name = $request->input('name');
        $js->chart_code = $request->input('chart_code');
        $js->formula = $request->input('formula');
        $js->queue = $request->input('queue');
        $js->transaction = $request->input('transaction');
        $js->save();

        return redirect('journal/setting');
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
        $js = JournalSetting::find($id);
        $chart_list = Chart::all();

        return view('journal.setting.edit', compact('js','chart_list'));
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
        $js = JournalSetting::find($id);
        $js->name = $request->input('name');
        $js->chart_code = $request->input('chart_code');
        $js->formula = $request->input('formula');
        $js->queue = $request->input('queue');
        $js->transaction = $request->input('transaction');
        $js->save();

        return redirect('journal/setting');
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
