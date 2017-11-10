@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('charts.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="chart_code">Chart Code</label>
                    <input type="text" class="form-control" id="chart_code" name="chart_code">
                </div>

                <div class="form-group">
                    <label for="sub_chart">sub_chart</label>
                    <select type="text" class="form-control" id="sub_chart" name="sub_chart">
                        <option value="">Null</option>
                        @foreach ($chart_list as $c)
                            <option value="{{ $c->chart_code }}">
                                {{ $c->chart_code }} | 
                                {{ $c->chart_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="chart_name">Name</label>
                    <input type="text" class="form-control" id="chart_name" name="chart_name">
                </div>

                <div class="form-group">
                    <label for="transaction">Transaction</label>
                    <select type="text" class="form-control" id="transaction" name="transaction">
                        <option value="debet">Debet</option>
                        <option value="credit">Credit</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="group_id">Group</label>
                    <select type="text" class="form-control" id="group_id" name="group_id">
                        @foreach ($group_list as $g)
                            <option value="{{ $g->id }}">{{ $g->name }}</option>
                        @endforeach
                    </select>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
