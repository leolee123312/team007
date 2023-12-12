@extends('app')
@section('seas_contents_left')   
<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <h1>顯示單一地區</h1>
    
海域:{{ $sea->ocean_name }}<br/>
地區:{{ $sea->region }}<br/>
面積(平方千米):{{ $sea->area_sq_km }}<br/>
平均深度:{{ $sea->avg_depth }}<br/>
地貌:{{ $sea->geomorphology }}<br/>


<h1>{{ $sea->ocean_name }}的所屬魚類</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">魚名</th>
            <th scope="col">海域外部建</th>
            <th scope="col">小(釐米)</th>
            <th scope="col">大(釐米)</th>
            <th scope="col">起始月</th>
            <th scope="col">結束月</th>
            <th scope="col">最輕(磅)</th>
            <th scope="col">最重(磅)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fishes as $fish)
        <tr>
            <th scope="row">{{ $fish->name }}</td>
            <td>{{ $fish->sea->ocean_name }}</td>
            <td>{{ $fish->longest }}</td>
            <td>{{ $fish->shortest }}</td>
            <td>{{ $fish->start }}</td>
            <td>{{ $fish->end }}</td>
            <td>{{ $fish->lightest_weight }}</td>
            <td>{{ $fish->heaviest_weight }}</td>
           
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
@section('seas_contents_center')   
<td><a href="{{ route('seas.index')}}" class="btn btn-primary">回上一頁</a></td>
@endsection
