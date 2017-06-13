@extends('layouts.master')

@section('content')

<h1>Edit Permit - Permit Name </h1>
<p class="lead">Edit permit below. <a href="{{ route('tasks.index') }}">Go back to all permits.</a></p>
<hr>


{!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->permitId]
]) !!}

<div class="form-group">
    {!! Form::label('permitName', 'Permit Naam:', ['class' => 'control-label']) !!}
    {!! Form::text('permitName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tools', 'Tools:', ['class' => 'control-label']) !!}
    {!! Form::text('tools', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('danger', 'Danger:', ['class' => 'control-label']) !!}
    {!! Form::text('danger', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop