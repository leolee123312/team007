


@extends('app')
@section('title', '魚類網站 - 列出所屬海洋')

@section('seas_contents')    
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('seas.create') }} ">新增海域</a>
    <a href="{{ route('seas.index') }} ">所有海域</a>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">海域</th>
                    <th scope="col">地區</th>
                    <th scope="col">面積(平方千米)</th>
                    <th scope="col">平均深度</th>
                    <th scope="col">地貌</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seas as $sea)
                <tr>
                    <td scope="row">{{ $sea->ocean_name }}</td>
                    <td >{{ $sea->region }}</td>
                    <td >{{ $sea->area_sq_km }}</td>
                    <td >{{ $sea->avg_depth }}</td>
                    <td >{{ $sea->geomorphology }}</td>
                    

                        <td >
                            
                                <a href="{{ route('seas.show', ['id'=>$sea->id]) }}" class="btn btn-primary btn-sm">顯示</a>
                                <a href="{{ route('seas.edit', ['id'=>$sea->id]) }}" class="btn btn-primary btn-sm">修改</a> 
                                <form action="{{ url('/seas/delete', ['id' => $sea->id]) }}" method="post" style="display: inline;"  >
                                        <input class="btn btn-primary btn-sm" type="submit" value="刪除" />
                                         @method('delete')
                                        @csrf
                                </form>
                            
                        </td>
                    
                </tr>   
                @endforeach

            </tbody>
    </table>
@endsection