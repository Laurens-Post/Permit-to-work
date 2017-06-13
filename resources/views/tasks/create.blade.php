@extends('layouts.master')

@section('content')


<h1>Add Permit</h1>
<p class="lead">Add new permit here.

<!-- <a href="/tasks/create">Add a new permit?</a></p> -->
<hr>

@include('alerts.errors')


{!! Form::open([
    'route' => 'tasks.store'
]) !!}


<div class="form-group">
    {!! Form::label('permitName', 'Permit Naam:', ['class' => 'control-label']) !!}
    {!! Form::text('permitName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Next', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop