@extends('layouts.master')

@section('title','一覧')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')

<p>{{$array->total_hit_count}}ヒット</p>
<div class="row mt-5">
    @foreach($array->rest as $item)
    <div class="card mb-3 mx-auto" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php $src=$item->image_url->shop_image1 != null ? $item->image_url->shop_image1 : "https://placehold.jp/240x240.png?text=No Image"?>
                <img src="{{$src}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><a href="/restaurant/{{$item->id}}">{{$item->name}}</a></h5>
                    <p class="card-text">アクセス：{{$item->access->line}}{{$item->access->station}} {{$item->access->station_exit}} 徒歩{{$item->access->walk}}分</p>
                    <p class="card-text">備考：{{$item->access->note}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="mx-auto">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>


@endsection
@include('layouts.footer')
