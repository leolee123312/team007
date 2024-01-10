


@extends('app')
@section('title', '魚類網站 - 列出所屬海洋')

@section('seas_contents')
@can('admin')
<div>
    <a href="{{ route('seas.create') }} " class="btn btn-primary btn-sm mb-2 ">新增海域</a>
</div>
@endcan

        <form action="{{ route('seas.select') }}">
            
            <div class="row">
                <div class="col-md-4">
                    <select class="form-select-lg mb-2" aria-label="Default select example" name="region">
                    
                        <option selected> 選擇地區</option>
                        <option value="1">北半球</option>
                        <option value="2">北半球和南半球之間</option>
                        <option value="3">南半球</option>
                        <option value="4">南半球和東半球之間</option>
                        <option value="5">東半球</option>
                        <option value="6">東半球和西半球之間</option>
                        <option value="7">西半球</option>
                        <option value="7">西半球和北半球之間</option>
                
                    </select>
            
                </div>
                <div class="col-md-7"> 
                        <button type="submit" class="btn btn-primary btn-sm "  id="select">查詢</button>
                </div>
            </div>
            {{-- 每一行一共有12欄位 --}}
        </form>

<h1>列印出對應的海域</h1>
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
                                @can('admin')
                                <a href="{{ route('seas.edit', ['id'=>$sea->id]) }}" class="btn btn-primary btn-sm">修改</a> 
                                
                                
                                <form action="{{ url('/seas/delete', ['id' => $sea->id]) }}" method="post" style="display: inline;"  >
                                        <input class="btn btn-primary btn-sm" type="submit" value="刪除" />
                                         @method('delete')
                                        @csrf
                                </form>
                                @elsecan('manager')
                                <a href="{{ route('seas.edit', ['id'=>$sea->id]) }}" class="btn btn-primary btn-sm">修改</a> 
                                @endcan

                            
                        </td>
                    
                </tr>   
                @endforeach

            </tbody>
    </table>
@endsection