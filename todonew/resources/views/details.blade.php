@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            <b>TODO DETAILS</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$todos->name}}</h5>
            <p class="card-text">{{$todos->description}}.</p>
            @foreach($all_todos as $sub_todo)
                @if ($sub_todo->parent_id == $todos->id)
                    {{ Form::open() }}
                    <li class="list-group-item">

                        <input type="checkbox" name="status" id="todo_{{ $sub_todo->id }}" {{ $sub_todo->status ? 'checked' : '' }}
                        onClick="this.form.submit()">
                        <input type="hidden" name="todo_id" value="{{ $sub_todo->id }}">

                        <a href="{{$sub_todo->id}}"
                           style="color: cornflowerblue">{{$sub_todo->name}}</a>
                    </li>
                    {{ Form::close() }}
                @endif
            @endforeach
            <a href="/create_sub/{{$todos->id}}"><span class="btn btn-primary">Create sub-task</span></a>
            <a href="/edit/{{$todos->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="/delete/{{$todos->id}}"><span class="btn btn-danger">Delete</span></a>
        </div>
    </div>

@endsection
