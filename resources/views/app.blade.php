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
    <div  class="container mt-5 ">
        @include('header')
    </div>
    <div class="container mt-5 ">
        @yield('fishes_contents')
        @yield('seas_contents')
    </div>
    <div class="container mt-5 text-left">
        @yield('fishes_contents_left')
        @yield('seas_contents_left')   
    </div>
    <div class="container mt-5 text-center">
        @yield('fishes_contents_center')
        @yield('seas_contents_center')  
    </div>
    <!-- 引入 Bootstrap 的 JS 文件（可選，視情況而定）-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
