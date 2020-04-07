@extends('layouts.app')

@section('content')

<div class="row">
    <a href="../" class="btn btn-secondary">Go Back</a>
</div>
<br>

<div class="row">
    <div class="card col-md-12 col-lg-12">
        <h2 class="title">{{ $todo->title }}</h2>
        <h6>{{ $todo->content }}</h6>
        <hr>
        <h6 class="danger">Due: {{ $todo->due }}</h6>
    </div>
</div>
<br>
<div class="row">
{{ Form::open(['action'=>['TodosController@destroy', $todo->id], 'method' => 'POST']) }}
    <div class="btn-group">
        <a href="{{ route('todo.index') }}/{{$todo->id}}/edit" class="btn btn-success">Edit</a>
        {{ Form::hidden('_method','DELETE') }}
        {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
    </div>
{{ Form::close() }}
</div>
@endsection
