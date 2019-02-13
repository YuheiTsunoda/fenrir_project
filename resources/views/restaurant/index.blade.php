@extends('layouts.master')

@section('title','一覧')
@include('layouts.head')
@include('layouts.header')
@section('content')
<p> {{$array[0]->name}} </p>
<table id="table" border="1">
    <tr><th>店舗名</th><th>アクセス</th></tr>
</table>
<a href="{{url('/search')}}">戻る</a>
@endsection
@include('layouts.footer')
