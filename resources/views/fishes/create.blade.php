@extends('app')

@section('title', '編輯特定魚類')

@section('fish_theme', '編輯中的魚類')

@section('fish_contents')
    {!! Form::model($fish, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\FishesController@update', $fish->id]]) !!}
    @include('fishes.form', ['submitButtonText'=>"更新魚類資料"])
    {!! Form::close() !!}
@endsection
