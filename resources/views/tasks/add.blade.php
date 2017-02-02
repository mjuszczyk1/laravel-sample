@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Add Task</h1>
            <hr>
            <form method="POST" action="/tasks">
                {{csrf_field()}}
                @include('components.errors')
                
                <div class="form-group">
                    <label for="taskTitle">Title</label>
                    <input type="text" class="form-control" id="taskTitle" name="taskTitle">
                </div>
                <div class="form-group">
                    <label for="taskBody">Body</label>
                    <textarea class="form-control" id="taskBody" name="taskBody"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection