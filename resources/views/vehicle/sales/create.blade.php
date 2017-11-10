@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::model($vs = new \App\VehicleSales, ['route' => 'vehicle.sales.store','id'=>'formVS']) !!}
      @include('vehicle.sales._form',['edit'=>false])
    {!! Form::close() !!}
</div>
@endsection

@section('scripts')
    @include('vehicle.sales._js')
@endsection