@extends('layouts.app')

@section('content')

<div class="panel-body">

    @include('common.errors')

    <div class="container">
        <form method="POST" action="{{url('tasks/'.$task->id)}}" class="form-horizontal">
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="tasks" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <label>Name</label>
                    <input type="text" name="name" id="tasks-name" class="form-control" value="{{$task->name}}">
                </div>
                <div class="col-sm-6">
                    <label>Person</label>
                    <input type="text" name="person" id="tasks-person" class="form-control" value="{{$task->person}}">
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus">Edit Task</i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
