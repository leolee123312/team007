@extends('app')

@section('title', '建立海域表單')

@section('seas_create_title', '建立海域的表單')

@section('fishes_create')

    {!! Form::open(['url' => 'seas/store']) !!}
    @include('seas.form', ['submitButtonText'=>"新增海域資料"])
    {!! Form::close() !!}
@endsection
