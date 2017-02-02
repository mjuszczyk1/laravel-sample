@extends('layout')

@section('content')
    <div class="row task-title-row">
        <div class="col-sm-8">
            <h1 class="no-top-marg">{{$task->title}}</h1>
        </div>
        <div class="col-sm-4 action-col">
            @if (!$task->completed)
                <form method="POST" action="/complete-task/{{$task->id}}">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-success task-status-change pull-right">Complete Task</button>
                </form>
            @else
                <form method="POST" action="/redo-task/{{$task->id}}">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-warning task-status-change pull-right">Redo Task</button>
                </form>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            @if (!empty($task->body))
                <hr>
                <p>{{$task->body}}</p>
            @endif
            <hr>
            <form method="POST" action="/delete-task/{{$task->id}}">
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger">Delete Task</button>
            </form>
        </div>
    </div>
@endsection
