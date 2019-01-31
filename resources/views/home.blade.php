<html>
<head>
    <script>
        // Geolocation APIに対応している
        if (navigator.geolocation) {
            alert("この端末では位置情報が取得できます");
            // Geolocation APIに対応していない
        } else {
            alert("この端末では位置情報が取得できません");
        }

        // 現在地取得処理
        function getPosition() {
            // 現在地を取得
            navigator.geolocation.getCurrentPosition(
                // 取得成功した場合
                function(position) {
                    var latitude=position.coords.latitude;
                    var longtude=position.coords.longitude;
                    alert("緯度:"+latitude+",経度"+longtude);
                },
                // 取得失敗した場合
                function(error) {
                    switch(error.code) {
                        case 1: //PERMISSION_DENIED
                            alert("位置情報の利用が許可されていません");
                            break;
                        case 2: //POSITION_UNAVAILABLE
                            alert("現在位置が取得できませんでした");
                            break;
                        case 3: //TIMEOUT
                            alert("タイムアウトになりました");
                            break;
                        default:
                            alert("その他のエラー(エラーコード:"+error.code+")");
                            break;
                    }
                }
            );
        }
    </script>
</head>
<body>
    <h1>位置情報取得サンプル</h1>
    <button onclick="getPosition();">位置情報を取得する</button>
    <a href="{{action('RestaurantController@index')}}">店舗検索</a>
</body>
</html>

