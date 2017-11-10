<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('chart_code', 'Chart') !!}
            <select name="chart_code" class="form-control">
                @foreach ($chart_list as $c)
                    @if ($c->chart_code == $js->chart_code)
                    <option value="{{ $c->chart_code }}" selected>{{ $c->chart_code }} - {{ $c->chart_name }}</option>
                    @else
                    <option value="{{ $c->chart_code }}">{{ $c->chart_code }} - {{ $c->chart_name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            {!! Form::label('formula', 'Formula') !!}
            {!! Form::text('formula', null, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('queue', 'Queue No') !!}
            {!! Form::text('queue', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('transaction', 'Transaction') !!}
            {!! Form::select('transaction', ['debet'=>'Debet','credit'=>'Credit'], null,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>