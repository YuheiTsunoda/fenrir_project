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
        })
</script>
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')
    <form action="/restaurant" method="get">
        <input type="text" name="lat" value="" id="lat">
        <input type="hidden" name="lng" value="" id="lng">
        <input type="hidden" name="num" value=1>
        <input type="submit" value="1">
    </form>
@endsection
@include('layouts.footer')
