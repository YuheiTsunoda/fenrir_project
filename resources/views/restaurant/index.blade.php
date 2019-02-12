<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ぐるなびAPI</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
<input type="number" id="key" placeholder="検索半径（１〜５）"><input type="button" id="submit" value="送信">
<table id="table" border="1">
    <tr><th>店舗名</th><th>アクセス</th></tr>
</table>

<script>
    var lat,lng;
    navigator.geolocation.getCurrentPosition(

    // [第1引数] 取得に成功した場合の関数
    function( position ) {
        // 取得したデータの整理
        var data = position.coords;

        // データの整理
        lat = data.latitude;
        lng = data.longitude;
    })

    function showResult( result ) {
        for ( var i in result.rest ) {
            // 全部最初の候補へ
            $("#table").append("<tr><td>" + "<a href='{{url('/restaurant/1')}}'>詳細  </a>"+result.rest[ i ].name + "</td><td>" + result.rest[ i ].address )
        }
    }

    $( function () {
        var url = "https://api.gnavi.co.jp/RestSearchAPI/20150630/?callback=?"
        var params = {
            keyid: "ff1d3a0f410919420eadb268d2c0a23c",
            format: "json",
            // 場所がうまく取得できない
            latitude: 34.702492,
            // latitude: lat,
            longitude: 135.495965,
            // longitude: lng,
            range: ""
        }

        $("#submit").on("click", function () {
            // params.range = $("#key").val()
            params.range = $("#key").val()
            $.getJSON( url, params, function( result ) {
                showResult( result )
            })
        })
    })
</script>
<a href="{{url('/')}}">戻る</a>
</body>
</html>
