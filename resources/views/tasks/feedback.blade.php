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
                <div class="panel-heading">Feedback</div>
		<div id="description" class="panel-body">
		
		 <div class="tab">
			<button class="tablinks" onclick="openCity(event, 'Scoring')" id="defaultOpen">Scoring</button>
			<button class="tablinks" onclick="openCity(event, 'Protection')">Protection</button>
			<button class="tablinks" onclick="openCity(event, 'Environment')">Environment</button>
			<button class="tablinks" onclick="openCity(event, 'Precaution')">Precaution</button>
		</div>

		<div id="Scoring" class="tabcontent">
			<h3>Scoring</h3>
		</div>

		<div id="Protection" class="tabcontent">
			<h3>Personal Protection</h3>
			
		
			
	
		</div>

		<div id="Environment" class="tabcontent">
			<h3>Environment</h3>
		</div> 
		
		<div id="Precaution" class="tabcontent">
			<h3>Precaution</h3>
		</div> 
		
		<script>
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
		</script>
		
    </div>
            </div>
			<input action="action" class="btn btn-primary" onclick="window.history.go(-1); return false;" type="button" value="Back" />
			<img src="{{ asset('images/step5.png') }}" class="step5">
        </div>

    </div>
</div>
{!! Form::close() !!}
@stop