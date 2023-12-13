@extends('app')

@section('title', '建立海域表單')

@section('fish_theme', '建立海域的表單')

@section('fish_contents')
    {!! Form::open(['url' => 'seas/store']) !!}
    @include('seas.form', ['submitButtonText'=>'新增海域資料'])
    {!! Form::close() !!}
@endsection
