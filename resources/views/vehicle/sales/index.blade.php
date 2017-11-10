@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Sales No</th>
            <th>Cash/Credit</th>
            <th>Leasing</th>
            <th>OTR</th>
            <th>BBN</th>
            <th>Disc</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($vehicle_sales as $v)
            <tr>
                <td>{{ $no = $no + 1 }}</td>
                <td>{{ $v->sales_no }}</td>
                <td>{{ $v->type->name }}</td>
                <td>{{ $v->leasing->name }}</td>
                <td>{{ $v->price_otr }}</td>
                <td>{{ $v->price_bbn }}</td>
                <td>{{ $v->price_disc }}</td>
                <td>
                    <a href="{{ route('vehicle.sales.edit',$v->id) }}">Payment</a>
                </td>
            </tr>
            @endforeach
            <tr></tr>
        </tbody>
    </table>
</div>
@endsection
