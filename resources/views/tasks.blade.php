@extends('layouts.master')

@section('content')

<h1>Permit List</h1>
<p class="lead">Here's a list of all your permits. <a href="/api/tasks/create">Add a new one?</a></p>
<hr>


@foreach($tasks as $task)
    <h3>{{ $task->permitName }}</h3>
    <p>{{ $task->tools}}</p>
    <p>
        <a href="{{ route('tasks.show', $task->permitId) }}" class="btn btn-info">View Permit</a>
        <a href="{{ route('tasks.edit', $task->permitId) }}" class="btn btn-primary">Edit Permit</a>
    </p>
    <hr>
@endforeach
@stop