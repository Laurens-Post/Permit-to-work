@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		<img src="{{ asset('images/no-image-small.png') }}">
					{{ Auth::user()->name }} {{ Auth::user()->lastName }} 
					<div style="float: right;"><img src="{{ asset('images/info.jpg') }}"></div><br /><br />
					<br />
            <div class="panel panel-default" id="precautions">
                <div class="panel-heading">Precautions</div>
		<div id="description" class="panel-body">
					{!! Form::open([
						'route' => 'precautionsapi.store'
					]) !!}
						<div class="preblock">		
						{!! Form::checkbox('name', 'Make welding equipment pressure and gass free', null, ['id' => 'precaution1', 'class' => 'precaution1']) !!}						
						{!! Form::label('precaution1', 'Make welding equipment pressure and gass free') !!}						
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Central Firesystem in Maintenaince', null, ['id' => 'precaution', 'class' => 'precaution2']) !!}						
						{!! Form::label('precaution2', 'Central Firesystem in Maintenaince') !!}
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Extra Ventilation', null, ['id' => 'precaution', 'class' => 'precaution3']) !!}						
						{!! Form::label('precaution3', 'Extra Ventilation') !!}
						</div>
						<div class="preblock">					
						{!! Form::checkbox('name', 'Fill Machinery with inert gass', null, ['id' => 'precaution', 'class' => 'precaution4']) !!}
						{!! Form::label('precaution4', 'Fill Machinery with inert gass') !!}
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Firewatch', null, ['id' => 'precaution', 'class' => 'precaution5']) !!}						
						{!! Form::label('precaution5', 'Firewatch') !!}
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Removal protecting or screening flamable material', null, ['id' => 'precaution', 'class' => 'precaution6']) !!}						
						{!! Form::label('precaution6', 'Removal protecting or screening flamable material') !!}
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Only use air driven machinery', null, ['id' => 'precaution', 'class' => 'precaution7']) !!}						
						{!! Form::label('precaution7', 'Only use air driven machinery') !!}
						</div>
						<div class="preblock">						
						{!! Form::checkbox('name', 'Localize central electral grid', null, ['id' => 'precaution', 'class' => 'precaution9']) !!}						
						{!! Form::label('precaution8', 'Localize central electral grid') !!}
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Isolate workspace', null, ['id' => 'precaution', 'class' => 'precaution10']) !!}						
						{!! Form::label('precaution10', 'Isolate workspace') !!}
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Fresh air supply', null, ['id' => 'precaution', 'class' => 'precaution11']) !!}						
						{!! Form::label('precaution11', 'Fresh air supply') !!}
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Isolate sewage floor drain', null, ['id' => 'precaution', 'class' => 'precaution12']) !!}						
						{!! Form::label('precaution12', 'Isolate sewage floor drain') !!}
						</div>
						<div class="preblock">
						{!! Form::checkbox('name', 'Locking procedure', null, ['id' => 'precaution', 'class' => 'precaution13']) !!}						
						{!! Form::label('precaution13', 'Locking procedure') !!}
						</div>
                </div>
            </div>
					<input action="action" class="btn btn-primary" onclick="window.history.go(-1); return false;" type="button" value="Back" />
					<img src="{{ asset('images/step4.png') }}" class="step4">
					<div style="float: right;"><a href="/api/feedback">{!! Form::submit('Next', ['class' => 'btn btn-primary']) !!}</a></div>
        </div>

    </div>
</div>
{!! Form::close() !!}
@stop