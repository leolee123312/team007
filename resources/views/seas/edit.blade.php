@extends('app')

@section('title', '編輯特定海域')

@section('fish_theme', '編輯中的海域')

@section('fish_contents')
    {!! Form::model($sea, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\SeasController@update', $->id]]) !!}
    @include('seas.form', ['submitButtonText'=>'更新海域資料'])
    {!! Form::close() !!}
@endsection