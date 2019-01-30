@extends('layouts.app')

@section('content')

<div class="panel-body">

    @include('common.errors')

    <div class="container">
            <div class="form-group">
                <label for="tasks" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <label>Name</label>
                    <input type="text" name="name" id="tasks-name" class="form-control" value="{{$task->name}}" disabled>
                </div>
                <div class="col-sm-6">
                    <label>Person</label>
                    <input type="text" name="person" id="tasks-person" class="form-control" value="{{$task->person}}" disabled>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <a href="{{url('tasks/'.$task->id.'/edit')}}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
