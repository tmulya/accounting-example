@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::model($vs, ['route' => ['vehicle.sales.update', $vs->id],'id'=>'formVS','method'=>'PATCH']) !!}
      @include('vehicle.sales._form',['edit'=>true])
    {!! Form::close() !!}
</div>
@endsection

@section('scripts')
    @include('vehicle.sales._js')
@endsection