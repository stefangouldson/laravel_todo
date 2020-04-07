@extends('layouts.app')

@section('content')

<h1>Todos</h1>
<hr>

@if( count($todos) > 0)
    @foreach ($todos as $todo)

    <div class="card">
        <h2><a href="todo/{{$todo->id}}">{{ $todo->title }}</a></h2>
        <span><small>{{ $todo->due }}</small></span>
    </div>
    
    <hr>

    @endforeach
@endif

@endsection
