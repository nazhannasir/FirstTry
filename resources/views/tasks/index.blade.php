@extends('layouts.app')

@section('content')

<div class="panel-body">

    @include('common.errors')
    
    <div class="container">
        <div style="padding-bottom: 5%">
        @auth
            <h5>
                <a href="{{url('tasks/create')}}" class="btn btn-primary float-right">New Task</a>
             <h5>
        @endauth
        <div>
        <div class="table table-striped css-serial">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Task</th>
                    <th>PIC</th>
                    <th>Action</th>
                </thead>
             
                @forelse($tasks as $task)
                <tr>
                    <td></td>
                    <td>{{ $task -> name }}</td>
                    <td>{{ $task -> person }}</td>
                    @auth
                    <td>
                        <a href="{{url('tasks/'.$task->id)}}" class="btn btn-primary">View</a>
                        <a href="{{url('tasks/'. $task->id .'/edit')}}" class="btn btn-primary">Edit</a>
                        <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$task->id}}">Delete</button>

<!-- Modal -->
<div id="myModal{{$task->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
    <div class="modal-body">
        <p>Are you sure you want to delete?</p>
        
    </div>
    <div class="modal-footer">
      <form action="{{url('tasks/'.$task->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}

        <button type="submit" class="btn btn-danger">
          Delete
        </button>
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
  </div>
</div>
                        
                    <td>
                    @endauth
                    @guest
                    <td><a href="{{url('login')}}">Click here to login</a></td>
                    @endguest
                @empty
                No data!
                @endforelse
                
            </table>
        </div>
    </div>

@endsection
