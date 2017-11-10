@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::model($js, ['route' =>['journal.setting.update', $js->id],'id'=>'formJS','method'=>'PATCH']) !!}
      @include('journal.setting._form',['edit'=>true])
    {!! Form::close() !!}
</div>
@endsection

@section('scripts')
    @include('vehicle.sales._js')
@endsection