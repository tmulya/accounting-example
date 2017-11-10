@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route(['journal.update', $]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="chart_code">Chart Code</label>
                    <select type="text" class="form-control" id="chart_code" name="chart_code">
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
                    <label for="debet">Debet</label>
                    <input type="text" class="form-control" id="debet" name="debet">
                </div>

                <div class="form-group">
                    <label for="credit">Credit</label>
                    <input type="text" class="form-control" id="credit" name="credit">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <div class="form-group">
                    <label for="journal_date">Date</label>
                    <input type="date" class="form-control" id="journal_date" name="journal_date">
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
