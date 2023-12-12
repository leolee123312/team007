
@extends('app')
@section('fishes_contents_left')   
<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <h1>顯示單一魚類</h1>
    
海域外部建:{{ $fish->name }}<br/>
小(釐米):{{ $fish->shortest }}<br/>
大(釐米):{{ $fish->longest }}<br/>
起始月:{{ $fish->start }}<br/>
結束月:{{ $fish->end }}<br/>
最輕(磅):{{ $fish->lightest_weight }}<br/>
最重(磅):{{ $fish->heaviest_weight }}<br/>

</div>

@endsection
@section('fishes_contents_center')   
<td><a href="{{ route('fishes.index')}}" class="btn btn-primary">回上一頁</a></td>
@endsection
