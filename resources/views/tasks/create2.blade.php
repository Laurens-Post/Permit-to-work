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
    {!! Form::label('danger', 'Danger:', ['class' => 'control-label']) !!}
    {!! Form::text('danger', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop