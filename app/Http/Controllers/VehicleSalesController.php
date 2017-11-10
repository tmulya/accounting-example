<?php

namespace App\Http\Controllers;

use App\Chart;
use App\Journal;
use App\JournalSetting;
use App\Leasing;
use App\Vehicle;
use App\VehicleSales;
use App\VehicleSalesPayment;
use App\VehicleSalesType;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class VehicleSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle_sales = VehicleSales::all();

        return view('vehicle.sales.index', compact('vehicle_sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicle_list = Vehicle::all();
        $type_list = VehicleSalesType::pluck('name','id');
        $leasing_list = Leasing::pluck('name','leasing_no');
        
        return view('vehicle.sales.create', compact('vehicle_list','type_list','leasing_list'));
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
        $vs->id = Uuid::uuid4()->getHex();
        $vs->sales_no = $vs->Maxno();
        $vs->sales_date = $request->input('sales_date');
        $vs->vehicle_id = $request->input('vehicle_id');
        $vs->type_id = $request->input('type_id');
        $vs->leasing_no = $request->input('leasing_no');
        $vs->price_otr = $request->input('price_otr');
        $vs->price_bbn = $request->input('price_bbn');
        $vs->price_disc = $request->input('price_disc');
        $vs->price_dp = $request->input('price_dp');
        $vs->save();

        if ($request->input('type_id'=='2')) {
            $settings = JournalSetting::where('name','vehicle.sales.credit')->orderBy('queue','asc')->get();
        }else{
            $settings = JournalSetting::where('name','vehicle.sales.cash')->orderBy('queue','asc')->get();
        }

        $this->postJournal($settings, $vs, $vs->sales_date,$vs->sales_no);

        return redirect('/vehicle/sales');
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
        $vs = VehicleSales::find($id);

        $vehicle_list = Vehicle::all();
        $type_list = VehicleSalesType::pluck('name','id');
        $leasing_list = Leasing::pluck('name','leasing_no');
        

        return view('vehicle.sales.edit', compact('vs','vehicle_list','type_list','leasing_list'));
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
        $vs = VehicleSales::find($id);

        $vsp = new VehicleSalesPayment();
        $vsp->id = Uuid::uuid4()->getHex();
        $vsp->payment_price = $request->input('payment_price');
        $vsp->payment_date = $request->input('payment_date');
        $vsp->payment_type = $request->input('payment_type');
        $vsp->bank_id = $request->input('bank_id');
        $vsp->sales_no = $vs->sales_no;
        $vsp->save();

        $settings = JournalSetting::where('name','vehicle.sales.payment')->orderBy('queue','asc')->get();
        
        $this->postJournal($settings, $vsp, $vsp->payment_date,$vs->sales_no);

        return redirect('/vehicle/sales');
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

    public function postJournal($settings, $obj, $date,$ext)
    {
        $form = array();
        foreach ($settings as $set) {
            $form = array();
            $formula = explode('&', $set->formula);
            foreach ($formula as $forval) {
                $form[] = $this->charMath($forval, $obj);
            }
            
            $formula_string = implode("",$form);
            
            eval('$formula_value ='.$formula_string.';');
            
            $chart = Chart::where('chart_code', $set->chart_code)->first();

            $j = new Journal();
            $j->id = Uuid::uuid4()->getHex();
            $j->chart_code = $set->chart_code;

            if ($set->transaction == 'debet') {
                $j->debet = round($formula_value);
                $j->credit = 0;
            }else{
                $j->debet = 0;
                $j->credit = round($formula_value);
            }

            $j->description = $chart->chart_name;
            $j->journal_date = $date;
            $j->ext_no = $ext;
            $j->save();
        }
    }
    public function charMath($string, $obj)
    {
        switch ($string) {
            case '+':
                return $string;
                break;
            case '-':
                return $string;
                break;
            case '*':
                return $string;
                break;
            case '/':
                return $string;
                break;
            case '(':
                return $string;
                break;
            case ')':
                return $string;
                break;
            
            default:
                if ($obj->{$string}) {
                    return $obj->{$string};   
                }else{
                    return $string;
                }
                break;
        }
    }
}
