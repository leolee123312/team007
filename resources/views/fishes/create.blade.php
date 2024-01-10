@extends('app')

@section('title', '建立魚類表單')

@section('fishes_create_title', '建立魚類的表單')

@section('fishes_create')
    {!! Form::open(['url' => 'fishes/store']) !!}
    @include('fishes.form', ['submitButtonText'=>"新增魚類資料"])
    {!! Form::close() !!}
    
@endsection
{{-- composer require laravelcollective/html --prefer-source 
    laravel 支援html  --}}