@extends('layouts.app')  {{-- 如果您有一个名为'layouts.app'的布局模板，请根据实际情况修改这一部分 --}}

@section('content')
    <div class="container">
        <h1>Purchase数据</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Password</th>
                    <th>Email</th>
                    {{-- 添加其他字段的表头 --}}
                </tr>
            </thead>
            <tbody>
                @foreach($pageshow as $purchase)
                <tr>
                    <td>{{ $purchase->id }}</td>
                    <td>{{ $purchase->password }}</td>
                    <td>{{ $purchase->email }}</td>
                    {{-- 添加其他字段的数据 --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
