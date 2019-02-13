@extends('layouts.master')

@section('title','詳細')
@include('layouts.head')
@include('layouts.header')
@section('content')
<input type="button" id="submit" value="詳細を表示">
<table id="table" border="1">
    <tr><th>店舗名</th><th>アクセス</th><th>電話番号</th><th>営業時間</th><th>画像</th></tr>
</table>
<script>
</script>
    <a href="{{url('/restaurant')}}">戻る</a>
@endsection
@include('layouts.footer')
