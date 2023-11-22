<html>
<head>
                <title>列出所有魚</title>
</head>
<body>
    <h1>列出所有魚</h1>
@for($i=0; $i<count($fishes); $i++)
    {{ $fishes[$i]['name'] }} <br/>
    {{ $fishes[$i]['sid'] }} <br/>
    {{ $fishes[$i]['longest'] }} <br/>
    {{ $fishes[$i]['shortest'] }} <br/><br/>
    {{ $fishes[$i]['start'] }} <br/><br/>
    {{ $fishes[$i]['end'] }} <br/><br/>
    {{ $fishes[$i]['lightest_weight'] }} <br/><br/>
    {{ $fishes[$i]['heaviest_weight'] }} <br/><br/>
@endfor




</body> 
</html>