@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		<img src="{{ asset('images/no-image-small.png') }}">
					{{ Auth::user()->name }} {{ Auth::user()->lastName }} 
					<div style="float: right;"><img src="{{ asset('images/info.jpg') }}"></div><br /><br />
					<br />
            <div class="panel panel-default">	
				<div class="panel-heading">Permit to work</div>			
				<div id="description" class="panel-body">
				@include('alerts.errors')
					{!! Form::open([
						'route' => 'tasks.store'
					]) !!}
	
					<div id="steps">Steps: 5</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					
					<div id="permit-type">
						{!! Form::label('type', 'Type:', ['class' => 'panel-heading']) !!}
						{!! Form::select('type', array('Hot Work' => 'Hot Work', 'Cold Work' => 'Cold Work'), 'Hot Work') !!}
					</div>
					<div id="permitdate">
						{!! Form::label('date', 'Date:', ['class' => 'panel-heading']) !!}
						{!! Form::selectMonth('month', ['class' => 'form-control']) !!} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					</div>
						Time: <?php echo (new \DateTime())->format('H:i:s'); ?>
						
					
						<div class="permitname">
						{!! Form::label('permitName', 'Permit Naam:', ['class' => 'panel-heading']) !!}
						{!! Form::text('permitName', null, ['class' => 'form-control']) !!}
						</div>
						<div id="workdescription">
						{!! Form::label('workDescription', 'Work description', ['class' => 'panel-heading']) !!}
						{!! Form::textarea('workDescription', null, ['class' => 'form-control']) !!}
					</div>
                </div>
            </div>
					<input action="action" class="btn btn-primary" onclick="window.history.go(-1); return false;" type="button" value="Back" />
					<img src="{{ asset('images/step1.png') }}" class="step1">
					<div style="float: right;"><a href="/api/work">{!! Form::submit('Next', ['class' => 'btn btn-primary']) !!}</a></div>
        </div>

    </div>
</div>
{!! Form::close() !!}

@stop