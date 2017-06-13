@extends('layouts.master')

@section('content')


<h1>{{ $task->permitName }}</h1>
<p class="lead">{{ $task->tools }}</p>
<p class="lead">{{ $task->type }}</p>
<p class="lead">{{ $task->danger }}</p>
<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">Back to all permits</a>
<a href="{{ route('tasks.edit', $task->permitId) }}" class="btn btn-primary">Edit Permit</a>

    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['tasks.destroy', $task->permitId]
        ]) !!}
            {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop