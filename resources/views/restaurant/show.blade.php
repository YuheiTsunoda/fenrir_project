<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ぐるなびAPI</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
<input type="button" id="submit" value="詳細を表示">
<table id="table" border="1">
    <tr><th>店舗名</th><th>アクセス</th><th>電話番号</th><th>営業時間</th><th>画像</th></tr>
</table>
<script>
    function showResult( result ) {
        $("#table").append("<tr><td>"+result.rest[0].name + "</td><td>" + result.rest[0].address+"</td><td>"
            + result.rest[0].tel+ "</td><td>" )
    }

    $( function () {
        var url = "https://api.gnavi.co.jp/RestSearchAPI/20150630/?callback=?"
        var params = {
            keyid: "ff1d3a0f410919420eadb268d2c0a23c",
            format: "json",
            // 場所がうまく取得できない
            latitude: 34.702492,
            longitude: 135.495965,
        }

        $("#submit").on("click", function () {
            $.getJSON( url, params, function( result ) {
                showResult( result )
            })
        })
    })
</script>
    <a href="{{url('/restaurant')}}">戻る</a>
</body>
</html>
