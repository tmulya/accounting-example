@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Code</th>
            <th>Name</th>
            <th>Group</th>
            <th>Chart Header</th>
            <th>Debet/Kredit</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($charts as $c)
            <tr>
                <td>{{ $no = $no + 1 }}</td>
                <td>{{ $c->chart_code }}</td>
                <td>{{ $c->chart_name }}</td>
                <td>{{ $c->group->name }}</td>
                <td>{{ $c->sub_chart }}</td>
                <td>{{ ucfirst($c->transaction) }}</td>
                <td>
                    <a href="{{ route('charts.edit',$c->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
            <tr></tr>
        </tbody>
    </table>
</div>
@endsection
