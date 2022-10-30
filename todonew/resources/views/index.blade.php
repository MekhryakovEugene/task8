@extends('layouts.app')

@section('title')
    My Todo App
@endsection

@section('content')


    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo)
                    @if ($todo->parent_id == NULL)
                        <!--{{ Form::open() }}-->
                        <li class="list-group-item">

                            <a target="_blank" href="check/{{$todo->id}}">
                            <input type="checkbox" name="id" id="todo_{{ $todo->id }}" {{ $todo->status ? 'checked' : '' }}
                            onClick="this.form.submit()">
                            <input type="hidden" name="todo_id" value="{{ $todo->id }}"></a>

                            <a href="details/{{$todo->id}}"
                            style="color: cornflowerblue">{{$todo->name}}</a>
                        </li>
                        <!--{{ Form::close() }}-->
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

@endsection
