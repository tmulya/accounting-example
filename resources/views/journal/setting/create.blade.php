@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::model($js = new \App\JournalSetting, ['route' =>'journal.setting.store','id'=>'formJS']) !!}
      @include('journal.setting._form',['edit'=>false])
    {!! Form::close() !!}
</div>
@endsection

@section('scripts')
    @include('vehicle.sales._js')
@endsection