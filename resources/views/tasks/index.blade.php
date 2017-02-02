@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>All Tasks</h1>
            <ul class="tasks">
                @foreach ($tasks as $task)
                    @if($task->completed)
                        <li class="completed">
                    @else
                        <li>
                    @endif
                        <a href="/tasks/{{ $task->id }}">{{$task->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection