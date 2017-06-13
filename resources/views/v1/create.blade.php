@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		<img src="{{ asset('images/no-image-small.jpg') }}">
					{{ Auth::user()->name }} {{ Auth::user()->lastName }} 
					<div style="float: right;">Date:</div>
					<br /><br />
            <div class="panel panel-default">
                <div class="panel-heading">Personal Protection</div>
		<div id="description" class="panel-body">
					{!! Form::open([
						'route' => 'work.store'
					]) !!}
						<div class="form-group">
						{!! Form::checkbox('personalProtection', 'Ear protection') !!}
						{!! Form::label('personalProtection', 'Ear protection', ['class' => 'panel-heading']) !!}
						</div>
						<div class="form-group">
						{!! Form::checkbox('personalProtection', 'Welding helmet') !!}						
						{!! Form::label('personalProtection', 'Welding helmet', ['class' => 'panel-heading']) !!}
						</div>
						<div class="form-group">
						{!! Form::checkbox('personalProtection', 'Hard hat') !!}						
						{!! Form::label('personalProtection', 'Hard hat', ['class' => 'panel-heading']) !!}
						</div>
						<div class="form-group">					
						{!! Form::checkbox('personalProtection', 'Reflective gear') !!}
						{!! Form::label('personalProtection', 'Reflective gear', ['class' => 'panel-heading']) !!}
						</div>
						<div class="form-group">
						{!! Form::checkbox('personalProtection', 'Washing Hands') !!}						
						{!! Form::label('personalProtection', 'Washing Hands', ['class' => 'panel-heading']) !!}
						</div>
						<div class="form-group">
						{!! Form::checkbox('personalProtection', 'Fire Extinguisher') !!}						
						{!! Form::label('personalProtection', 'Fire Extinguisher', ['class' => 'panel-heading']) !!}
						</div>
						<div class="form-group">
						{!! Form::checkbox('personalProtection', 'Protective Boots') !!}						
						{!! Form::label('personalProtection', 'Protective Boots', ['class' => 'panel-heading']) !!}
						</div>
						<div class="form-group">						
						{!! Form::checkbox('personalProtection', 'Protective Gloves') !!}						
						{!! Form::label('personalProtection', 'Protective Gloves', ['class' => 'panel-heading']) !!}
					</div>
                </div>
            </div>
					<a href="/api/description">Go Back</a><img src="{{ asset('images/step-bar.jpg') }}">
					<div style="float: right;"><a href="/api/environment">{!! Form::submit('Next', ['class' => 'btn btn-primary']) !!}</a></div>
        </div>

    </div>
</div>
{!! Form::close() !!}
@stop