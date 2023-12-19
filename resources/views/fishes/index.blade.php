
@extends('app')
@section('title', '魚類網站 - 列出所有魚類')
@section('fishes_contents')    
<div>
    <a href="{{ route('fishes.create') }} " class="btn btn-primary btn-sm ">新增魚類</a>
    <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#createModal">新增魚類快捷</button>
</div>
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content " >
            {{-- content 類似一個實心方框 --}}
            <div class="modal-header">
                <div class="modal-title">新增魚類資料</div>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form action="{{ route('fishes.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">  {{-- action 會去執行fishes/store路由的funtion store --}}
                        <label for="name" class="form-label">魚類姓名</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="魚類姓名">
                    </div>
                </br>
                    <div class="form-group">
                        <label for="name" class="form-label">所屬海域</label>
                            <select class="form-select" aria-label="Default select example" name="sid">
                                {{-- name="sid"對應到Fishescontroller     $sid = $request->input('sid'); --}}
                                @foreach ( $seas as $key => $sea)
                                <option value={{  $key  }} >{{ $sea }}</option>      
                                @endforeach
                            </select>      
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">最大長度</label>
                        <input type="text" class="form-control" id="longest" placeholder="最大長度"  name="longest">
                            {{-- 統稱name是後端在抓的 --}}
                    </div>
                    <div class="form-group">  {{-- action 會去執行fishes/store路由的funtion store --}}
                        <label for="name" class="form-label">最短長度</label>
                        <input type="text" class="form-control" id="shortest" placeholder="最短長度" name="shortest">
                    </div>
                 
                    <div class="mb-3">
                        <label for="start" class="form-label">開始日期</label>
                        <input class="form-control" type="date" id="start" name="start">
                    </div>
                    <div class="mb-3">
                        <label for="end" class="form-label">結束日期</label>
                        <input class="form-control" type="date" id="end" name="end">
                    </div>
                    <div class="form-group">  {{-- action 會去執行fishes/store路由的funtion store --}}
                        <label for="name" class="form-label">最輕體重</label>
                        <input type="text" class="form-control" id="lightest_weight" placeholder="最輕體重" name="lightest_weight">
                    </div>
                    <div class="form-group">  {{-- action 會去執行fishes/store路由的funtion store --}}
                        <label for="name" class="form-label">最重體重</label>
                        <input type="text" class="form-control" id="heaviest_weight" placeholder="最重體重" name="heaviest_weight">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            新增魚類
                        </button>
                    </div>
                </form>
            </div>
         
            
        </div>
    </div> 
</div>

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
