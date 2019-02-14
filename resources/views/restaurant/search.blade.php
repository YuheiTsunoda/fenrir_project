@extends('layouts.master')

@section('title','検索')
@section('stylesheet')
<script>
    navigator.geolocation.getCurrentPosition(
        // [第1引数] 取得に成功した場合の関数
        function( position ) {
            // 取得したデータの整理
            var data = position.coords;
            // データの整理
            $('#lat').val(data.latitude);
            $('#lng').val(data.longitude);

            alert("緯度:"+position.coords.latitude+",経度"+position.coords.longitude+"\n位置情報が確認できました");
        },
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
</script>
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')
    <div class="container mt-5">
        <form action="/restaurant" method="get">
            <div class="form-group">
                <input type="hidden" name="lat" value="" id="lat" class="form-control">
                <input type="hidden" name="lng" value="" id="lng" class="form-control">
                <label for="Input" class="font-weight-bold ">検索半径(300m~3000m) <p class="lert alert-light text-left font-weight-light">位置情報が取得できるまでお待ちください</p></label>
                <select name="range" id="range" class="custom-select custom-select-lg mb-3">
                    <option value=1>300m</option>
                    <option value=2>500m</option>
                    <option value=3>1000m</option>
                    <option value=4>2000m</option>
                    <option value=5>3000m</option>
                </select>
                <button class="btn btn-primary" type="submit">検索</button>
            </div>
        </form>
    </div>

            {{--<h1 class="display-4">Fluid jumbotron</h1>--}}
            {{--<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>--}}


@endsection
@include('layouts.footer')
