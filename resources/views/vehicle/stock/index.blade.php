@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Vehicle Code</th>
            <th>Name</th>
            <th>Color</th>
            <th>Frame No</th>
            <th>Engine No</th>
            <th>Ext No.</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($vehicles as $v)
            <tr>
                <td>{{ $no = $no + 1 }}</td>
                <td>{{ $v->vehicle_code }}</td>
                <td>{{ $v->vehicle_name }}</td>
                <td>{{ $v->vehicle_color }}</td>
                <td>{{ $v->frame_no }}</td>
                <td>{{ $v->engine_no }}</td>
                <td>{{ $v->ext_no }}</td>
                <td>
                    <a href="{{ route('vehicle.stock.edit',$v->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
            <tr></tr>
        </tbody>
    </table>
</div>
@endsection
