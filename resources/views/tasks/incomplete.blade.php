@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Incomplete Tasks</h1>
            <ul class="tasks">
                {{-- {{$tasks}} --}}
                @foreach ($tasks as $task)
                    <li>
                        <a href="/tasks/{{ $task->id }}">{{$task->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection