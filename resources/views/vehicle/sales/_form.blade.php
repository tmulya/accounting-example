<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('sales_no', 'Sales No') !!}
            @if ($edit)
                {!! Form::text('sales_no', null, ['class'=>'form-control']) !!}
            @else
                {!! Form::text('sales_no', $vs->Maxno(), ['class'=>'form-control','readonly']) !!}
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('sales_date', 'Date') !!}
            {!! Form::date('sales_date',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            <label for="vehicle_id">Vehicle</label>
            <select name="vehicle_id" class="form-control" id="vehicle_id">
                <option value="">-- Choose Vehicle</option>
                @foreach ($vehicle_list as $v)
                    @if ($v->id == $vs->vehicle_id)
                        <option value="{{ $v->id }}" selected>{{ $v->vehicle_name }} | {{ $v->vehicle_color }}</option>
                    @else 
                        <option value="{{ $v->id }}">{{ $v->vehicle_name }} | {{ $v->vehicle_color }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            {!! Form::label('type_id', 'Cash/Credit') !!}
            {!! Form::select('type_id', $type_list, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('leasing_no','Leasing') !!}
            {!! Form::select('leasing_no', $leasing_list, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price_otr','OTR') !!}
            {!! Form::text('price_otr', null, ['class'=>'form-control','id'=>'price_otr','readonly']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price_bbn','BBN') !!}
            {!! Form::text('price_bbn', null, ['class'=>'form-control','id'=>'price_bbn','readonly']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price_disc','Discount') !!}
            {!! Form::text('price_disc', null, ['class'=>'form-control','id'=>'price_disc','readonly']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price_dp','Down Payment') !!}
            {!! Form::text('price_dp', null, ['class'=>'form-control','id'=>'price_dp']) !!}
        </div>
    </div>
    @if ($edit)
    
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('piutang_cash', 'Piutang Cash') !!}
            {!! Form::text('piutang_cash', $vs->price_otr - $vs->price_disc, ['class'=>'form-control','readonly']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('payment_price', 'Amount') !!}
            {!! Form::text('payment_price', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('payment_date', 'Date') !!}
            {!! Form::date('payment_date', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('payment_type', 'Type') !!}
            {!! Form::select('payment_type', ['cash'=>'Cash','transfer'=>'Transfer'],null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('bank_id', 'Bank') !!}
            {!! Form::select('bank_id', ['bri'=>'BRI','BCA'=>'BCA'],null,['class'=>'form-control']) !!}
        </div>
    </div>
    @endif
</div>
<button type="submit" class="btn btn-primary">Submit</button>