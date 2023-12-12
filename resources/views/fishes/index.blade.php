
@extends('app')
@section('title', '魚類網站 - 列出所有魚類')
@section('fishes_contents')    
    <h1>列印出所有魚類</h1>
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
                    <td scope="row">{{ $fish->name }}</td>
                    <td>{{ $fish->sea->ocean_name }}</td>
                    <td>{{ $fish->longest }}</td>
                    <td>{{ $fish->shortest }}</td>
                    <td>{{ $fish->start }}</td>
                    <td>{{ $fish->end }}</td>
                    <td>{{ $fish->lightest_weight }}</td>
                    <td>{{ $fish->heaviest_weight }}</td>
                    <form action="{{ url('/fishes/delete', ['id' => $fish->id]) }}" method="post" >
                        <td  >
                            <a href="{{ route('fishes.show', ['id'=>$fish->id]) }}" class="btn btn-primary btn-sm" style="display: inline;">顯示</a>
                            <a href="{{ route('fishes.edit', ['id'=>$fish->id]) }}" class="btn btn-primary btn-sm" >修改</a> 
                          
                            <input class="btn btn-primary btn-sm " type="submit" value="刪除"   />
                            @method('delete')
                            @csrf
                        </td>
                    </form>
                       
                    
                  
                    
                    
                
            
            
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
