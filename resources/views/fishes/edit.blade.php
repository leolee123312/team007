@extends('app')

@section('title', '編輯特定魚類')

@section('edit_fish', '編輯中的魚類')

@section('fish_edit')
    {!! Form::model($fish, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\FishesController@update', $fish->id]]) !!}
    @include('fishes.form', ['submitButtonText'=>"更新魚類資料"])
    {!! Form::close() !!}
@endsection
