@extends('layouts.master')

@section('title','一覧')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')
{{--<p> {{$array[0]->name}} </p>--}}
{{--<table id="table" border="1">--}}
    {{--<tr><th>店舗名</th><th>アクセス</th></tr>--}}
{{--</table>--}}
{{--<a href="{{url('/search')}}">戻る</a>--}}

<div class="row">
    @foreach($array as $item)
    <div class="card mb-3 mx-auto" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php $src=$item->image_url->shop_image1 != null ? $item->image_url->shop_image1 : "https://placehold.jp/240x240.png?text=No Image"?>
                <img src="{{$src}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">住所：{{$item->address}}</p>
                    <p class="card-text">電話番号：{{$item->tel}}</p>
                    <p class="card-text">営業時間：{{$item->opentime}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
@include('layouts.footer')
