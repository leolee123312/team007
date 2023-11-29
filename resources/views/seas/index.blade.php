<html>

<head>
    <title>列出所有魚類</title>
</head>

<body>
<h1>列出對應的海域</h1>

<table>
    <tr>
        <th>海域</th>
        <th>地區</th>
        <th>面積(平方千米)</th>
        <th>平均深度</th>
        <th>地貌</th>
    </tr>
    @for($i=0; $i<count($teams); $i++)
        <tr>
            <td>{{ $item->ocean_name }}</td>
            <td>{{ $item->region }}</td>
            <td>{{ $item->area_sq_km }}</td>
            <td>{{ $item->avg_depth }}</td>
            <td>{{ $item->geomorphology }}</td>
            <td><a href="{{ route('seas.show', ['id'=>$seas[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('seas.edit', ['id'=>$seas[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
<table>

</body>
</html>
