@extends('layouts.app')

@section('content')

<h1>Update To-Do</h1>
<hr>
{{ Form:: open( ['action' => ['TodosController@update', $todo->id], 'method'=>'POST'])}}
    @csrf
    <div class="form-group">
        {{ Form::text('title',$todo->title,['class'=>'form-control', 'placeholder'=>'Create Tilte']) }}
    </div>
    <div class="form-group">
        {{ Form::text('content',$todo->content,['class'=>'form-control', 'placeholder'=>'Enter To Do']) }}
    </div>
    <div class="form-group">
        {{ Form::text('due',$todo->due,['class'=>'form-control', 'placeholder'=>'When is this due?']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    <button type="submit" class="btn btn-secondary">Update</button>
{{ Form::close() }}

@endsection
