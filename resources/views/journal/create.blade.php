@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route(['vehicle.stock.update',$vehicle->id]) }}" method="post">
    
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
                <div class="form-group">
                    <label for="frame_no">Frame No</label>
                    <input type="text" class="form-control" id="frame_no" name="frame_no">
                </div>

                <div class="form-group">
                    <label for="engine_no">Engine No</label>
                    <input type="text" class="form-control" id="engine_no" name="engine_no">
                </div>

                <div class="form-group">
                    <label for="vehicle_code">Vehicle Code</label>
                    <input type="text" class="form-control" id="vehicle_code" name="vehicle_code">
                </div>

                <div class="form-group">
                    <label for="vehicle_name">Vehicle Name</label>
                    <input type="text" class="form-control" id="vehicle_name" name="vehicle_name">
                </div>

                <div class="form-group">
                    <label for="vehicle_color">Vehicle Color</label>
                    <input type="text" class="form-control" id="vehicle_color" name="vehicle_color">
                </div>

                <div class="form-group">
                    <label for="ext_no">Ext No</label>
                    <input type="text" class="form-control" id="ext_no" name="ext_no">
                </div>

                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="price_hpp">HPP</label>
                <input type="text" class="form-control" id="price_hpp" name="price_hpp">
            </div>

            <div class="form-group">
                <label for="price_otr">OTR</label>
                <input type="text" class="form-control" id="price_otr" name="price_otr">
            </div>
            <div class="form-group">
                <label for="price_off">OFF The Road</label>
                <input type="text" class="form-control" id="price_off" name="price_off">
            </div>
            <div class="form-group">
                <label for="price_bbn">BBN</label>
                <input type="text" class="form-control" id="price_bbn" name="price_bbn">
            </div>
            <div class="form-group">
                <label for="price_disc">Discount</label>
                <input type="text" class="form-control" id="price_disc" name="price_disc">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection