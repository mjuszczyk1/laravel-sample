@extends('layout')

@section('content')
    <ul>
        {{-- {{$tasks}} --}}
        @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{ $task->id }}">{{$task->body}}</a>
            </li>
        @endforeach
    </ul>
@endsection