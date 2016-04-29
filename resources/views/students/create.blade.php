@extends('layouts.default')

@section('title', 'Create new student')

@section('content')

@include('elements.validation_error')

{!! Form::open(['url' => 'students/create', 'method' => 'post', 'class' => 'form-horizontal']) !!}

    {{ Form::token() }}

    <div class="form-group">
        {{ Form::label('username', 'Username', ['class' => 'col-sm-2 control-label']) }}
        <div class="col-sm-6">
            {{ Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) }}
        <div class="col-sm-6">
            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) }}
        <div class="col-sm-6">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('fullname', 'Fullname', ['class' => 'col-sm-2 control-label']) }}
        <div class="col-sm-6">
            {{ Form::text('fullname', '', ['class' => 'form-control', 'placeholder' => 'Fullname']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('birthday', 'Birthday', ['class' => 'col-sm-2 control-label']) }}
        <div class="col-sm-4">
            {{ Form::date('birthday', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Create', ['class' => 'btn btn-default']) }}
        </div>
    </div>

{!! Form::close() !!}

@endsection
