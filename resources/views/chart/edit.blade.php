@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('charts.update', $chart->id) }}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="chart_code">Chart Code</label>
                    <input type="text" class="form-control" id="chart_code" name="chart_code" value="{{ $chart->chart_code }}">
                </div>

                <div class="form-group">
                    <label for="sub_chart">sub_chart</label>
                    <select type="text" class="form-control" id="sub_chart" name="sub_chart">
                        <option value="">Null</option>
                        @foreach ($chart_list as $c)
                            @if ($c->chart_code == $chart->sub_chart)
                            <option value="{{ $c->chart_code }}" selected>{{ $c->chart_name }}</option>
                            @else
                            <option value="{{ $c->chart_code }}">{{ $c->chart_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="chart_name">Name</label>
                    <input type="text" class="form-control" id="chart_name" name="chart_name" value="{{ $chart->chart_name }}">
                </div>

                <div class="form-group">
                    <label for="transaction">Transaction</label>
                    <select type="text" class="form-control" id="transaction" name="transaction">
                        @if ($chart->transaction == 'debet')
                            <option value="debet" selected>Debet</option>
                            <option value="credit">Credit</option>
                        @else 
                            <option value="debet">Debet</option>
                            <option value="credit" selected>Credit</option>
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <label for="group_id">Group</label>
                    <select type="text" class="form-control" id="group_id" name="group_id">
                        @foreach ($group_list as $g)
                            @if ($g->id == $chart->group_id)
                                <option value="{{ $g->id }}" selected>{{ $g->name }}</option>
                            @else 
                            <option value="{{ $g->id }}">{{ $g->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
