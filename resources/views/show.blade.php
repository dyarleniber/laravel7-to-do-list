@extends('layout')

@section('title', 'Show task')

@section('back', 'true')

@section('content')

    <div id="show-content">
        <p class="name">{{ $task->name }}</p>
        @if ($task->completed)
            <p class="completed-task">Completed Task</p>
        @else
            <p class="pending-task">Pending Task</p>
        @endif
        <p class="name">{{ $task->user->name }} - {{ $task->user->email }}</p>
        <div class="bottom">
            <div id="created-at-div">
                <label for="created-at">Created at</label>
                <p id="created-at">{{ date('d/m/Y', strtotime($task->created_at)) }}</p>
            </div>
            <div id="updated-at-div">
                <label for="updated-at">Created at</label>
                <p id="updated-at">{{ date('d/m/Y', strtotime($task->updated_at)) }}</p>
            </div>
        </div>
    </div>

@endsection
