
@extends('app')

@section('title', 'NBA網站 - 列出所有魚類')

@section('nba_contents')
<h1>列出所有魚類</h1>

<table>
    <tr>
        <th>魚名</th>
        <th>海域外部建</th>
        <th>小(釐米)</th>
        <th>大(釐米)</th>
        <th>起始月</th>
        <th>結束月</th>
        <th>最輕(磅)</th>
        <th>最重(磅)</th>
    </tr>
    @for($i=0; $i<count($fishes); $i++)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->sid }}</td>
            <td>{{ $item->longest }}</td>
            <td>{{ $item->shortest }}</td>
            <td>{{ $item->start }}</td>
            <td>{{ $item->end }}</td>
            <td>{{ $item->lightest_weight }}</td>
            <td>{{ $item->heaviest_weight }}</td>
            <td><a href="{{ route('fishes.show', ['id'=>$fishes[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('fishes.edit', ['id'=>$fishes[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>   
        </tr>
    @endfor
<table>
@endsection