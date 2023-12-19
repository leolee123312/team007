@extends('app')

@section('title', '編輯特定海域')

@section('edit_sea', '編輯中的海域')

@section('sea_edit')
    {!! Form::model($sea, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\SeasController@update', $sea->id]]) !!}
    @include('seas.form', ['submitButtonText'=>'更新海域資料'])
    {!! Form::close() !!}
@endsection

