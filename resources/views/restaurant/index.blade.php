<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ぐるなびAPI</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    {{--<input type="number" id="key" placeholder="検索半径（１〜５）"><input type="button" id="submit" value="送信">--}}
    {{--@for($i=0;$i<$array.count;$i++)--}}
    <p> {{$array[0]->name}} </p>
    <table id="table" border="1">
        <tr><th>店舗名</th><th>アクセス</th></tr>
    </table>
    <a href="{{url('/')}}">戻る</a>
</body>
</html>
