<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ぐるなびAPI</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
    navigator.geolocation.getCurrentPosition(

    // [第1引数] 取得に成功した場合の関数
    function( position ) {
    // 取得したデータの整理
    var data = position.coords;
console.log(data);
    // データの整理
    $('#lat').val(data.latitude);
    $('#lng').val(data.longitude);
    })

    </script>
</head>
<body>
{{--<input type="number" id="key" placeholder="検索半径（１〜５）"><input type="button" id="submit" value="送信">--}}
    <form action="/restaurant" method="get">
        <input type="text" name="lat" value="" id="lat">
        <input type="hidden" name="lng" value="" id="lng">
        <input type="hidden" name="num" value=1>
        <input type="submit" value="1">
    </form>

</body>
</html>
