@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Queue No</th>
            <th>name</th>
            <th>Chart Code</th>
            <th>Chart</th>
            <th>formula</th>
            <th>Debet/Credit</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($js as $j)
            <tr>
                <td>{{ $no = $no + 1 }}</td>
                <td>{{ $j->queue }}</td>
                <td>{{ $j->name }}</td>
                <td>{{ $j->chart_code }}</td>
                <td>{{ $j->chart->chart_name }}</td>
                <td>{{ $j->formula }}</td>
                <td>{{ ucfirst($j->transaction) }}</td>
                <td>
                    <a href="{{ route('journal.setting.edit',$j->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
            <tr></tr>
        </tbody>
    </table>
</div>
@endsection
