<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>列印出所有魚類</title>

    <!-- 引入 Bootstrap 的 CSS 文件 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>列印出所有魚類</h1>
        <table class="table">
            <thead>
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
            </thead>
            <tbody>
                @foreach ($fishes as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->sid }}</td>
                    <td>{{ $item->longest }}</td>
                    <td>{{ $item->shortest }}</td>
                    <td>{{ $item->start }}</td>
                    <td>{{ $item->end }}</td>
                    <td>{{ $item->lightest_weight }}</td>
                    <td>{{ $item->heaviest_weight }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- 引入 Bootstrap 的 JS 文件（可選，視情況而定）-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
