@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Chart</th>
            <th>Account</th>
            <th>Debet</th>
            <th>Credit</th>
            <th>Date</th>
            <th>Ext No</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @php
                $no = 0;
                $debet = 0;
                $credit = 0;
            @endphp
            @foreach ($journal as $j)
            <tr>
                <td>{{ $no = $no + 1 }}</td>
                <td>{{ $j->chart_code }}</td>
                <td>{{ $j->chart->chart_name }}</td>
                <td>
                    {{ number_format($j->debet) }}
                    @php
                        $debet = $j->debet + $debet;
                    @endphp
                </td>
                <td>
                    {{ number_format($j->credit) }}
                    @php
                        $credit = $j->credit + $credit;
                    @endphp
                </td>
                <td>{{ $j->journal_date }}</td>
                <td>{{ $j->ext_no }}</td>
                <td>
                    <a href="{{ route('journal.edit',$j->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
            <tr></tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ number_format($debet) }}</td>
                <td>{{ number_format($credit) }}</td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
