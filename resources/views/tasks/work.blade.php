@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		<img src="{{ asset('images/no-image-small.png') }}">
					{{ Auth::user()->name }} {{ Auth::user()->lastName }} 
					<div style="float: right;">Date:</div>
					<br /><br />
            <div class="panel panel-default" id="protection">
                <div class="panel-heading">Personal Protection</div>
					<div id="description" class="panel-body">
					{!! Form::open([
						'route' => 'work.store'
					]) !!}
						<div class="form-group1">			
						{!! Form::checkbox('name', 'Ear Protection', null, ['id' => 'earprotection', 'class' => 'earprotection']) !!}
						{!! Form::label('earprotection', 'Ear Protection') !!}	
						</div>
						<div class="form-group1">
						{!! Form::checkbox('name', 'Welding helmet', null, ['id' => 'weldinghelmet', 'class' => 'weldinghelmet']) !!}
						{!! Form::label('weldinghelmet', 'Welding helmet') !!}	
						</div>
						<div class="form-group1">
						{!! Form::checkbox('name', 'Hard hat', null, ['id' => 'hardhat', 'class' => 'hardhat']) !!}
						{!! Form::label('hardhat', 'Hard hat') !!}	
						</div>
						<div class="form-group1">					
						{!! Form::checkbox('name', 'Reflective Gear', null, ['id' => 'reflectivegear', 'class' => 'reflectivegear']) !!}
						{!! Form::label('reflectivegear', 'Reflective Gear') !!}	
						</div>
						<div class="form-group2">
						{!! Form::checkbox('name', 'Clean Hands', null, ['id' => 'cleanhands', 'class' => 'cleanhands']) !!}
						{!! Form::label('cleanhands', 'Clean Hands') !!}	
						</div>
						<div class="form-group2">
						{!! Form::checkbox('name', 'Fire Extinguisher', null, ['id' => 'fire', 'class' => 'fire']) !!}
						{!! Form::label('fire', 'Fire Extinguisher') !!}	
						</div>
						<div class="form-group2">
						{!! Form::checkbox('name', 'Protective Boots', null, ['id' => 'protectiveboots', 'class' => 'protectiveboots']) !!}
						{!! Form::label('protectiveboots', 'Protective Boots') !!}	
						</div>
						<div class="form-group2">						
						{!! Form::checkbox('name', 'Protective Gloves', null, ['id' => 'protectivegloves', 'class' => 'protectivegloves']) !!}
						{!! Form::label('protectivegloves', 'Protective Gloves') !!}	
						</div>
                </div>
            </div>
					<input action="action" class="btn btn-primary" onclick="window.history.go(-1); return false;" type="button" value="Back" />
					<img src="{{ asset('images/step2.png') }}" class="step2">
					<div style="float: right;"><a href="/api/environment">{!! Form::submit('Next', ['class' => 'btn btn-primary']) !!}</a></div>
        </div>

    </div>
</div>
{!! Form::close() !!}
@stop