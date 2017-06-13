@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		<img src="{{ asset('images/no-image-small.png') }}">
					{{ Auth::user()->name }} {{ Auth::user()->lastName }} 
					<div style="float: right;"><img src="{{ asset('images/info.jpg') }}"></div><br /><br />
					<br />
            <div class="panel panel-default" id="environment">
                <div class="panel-heading">Environment</div>
					<div id="description" class="panel-body">
					{!! Form::open([
						'route' => 'environmentapi.store'
					]) !!}
						<div class="form-group1">			
						{!! Form::checkbox('name', 'Toxic Fumes', null, ['id' => 'toxicfumes', 'class' => 'toxicfumes']) !!}
						{!! Form::label('toxicfumes', 'Toxic Fumes') !!}	
						</div>
						<div class="form-group1">
						{!! Form::checkbox('name', 'Spilled Water', null, ['id' => 'spilledwater', 'class' => 'spilledwater']) !!}
						{!! Form::label('spilledwater', 'Spilled Water') !!}	
						</div>
						<div class="form-group1">
						{!! Form::checkbox('name', 'Fire Danger', null, ['id' => 'firedanger', 'class' => 'firedanger']) !!}
						{!! Form::label('firedanger', 'Fire Danger') !!}	
						</div>
						<div class="form-group1">					
						{!! Form::checkbox('name', 'Loud Noise', null, ['id' => 'loudnoise', 'class' => 'loudnoise']) !!}
						{!! Form::label('loudnoise', 'Loud Noise') !!}	
						</div>
						<div class="form-group2">
						{!! Form::checkbox('name', 'Spilled Waste', null, ['id' => 'spilledwaste', 'class' => 'spilledwaste']) !!}
						{!! Form::label('spilledwaste', 'Spilled Waste') !!}	
						</div>
						<div class="form-group2">
						{!! Form::checkbox('name', 'Slippery Floor', null, ['id' => 'slipperyfloor', 'class' => 'slipperyfloor']) !!}
						{!! Form::label('slipperyfloor', 'Slippery Floor') !!}	
						</div>		
                </div>
            </div>
					<input action="action" class="btn btn-primary" onclick="window.history.go(-1); return false;" type="button" value="Back" />
					<img src="{{ asset('images/step3.png') }}" class="step3">
					<div style="float: right;"><a href="/api/precautions">{!! Form::submit('Next', ['class' => 'btn btn-primary']) !!}</a></div>
        </div>

    </div>
</div>
{!! Form::close() !!}
@stop