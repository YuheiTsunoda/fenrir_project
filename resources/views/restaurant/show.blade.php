@extends('layouts.master')

@section('title','詳細')
@include('layouts.head')
@include('layouts.header')
@section('content')
{{--<input type="button" id="submit" value="詳細を表示">--}}
{{--<table id="table" border="1">--}}
    {{--<tr><th>店舗名</th><th>アクセス</th><th>電話番号</th><th>営業時間</th><th>画像</th></tr>--}}
{{--</table>--}}
{{--<script>--}}
{{--</script>--}}
    {{--<a href="{{url('/restaurant')}}">戻る</a>--}}

<div class="row mt-5">
        <div class="card mb-3 mx-auto" style="max-width: 640px;">
            <div class="row no-gutters">
                <div class="mx-auto mt-4">
                    <?php $src=$obj[0]->image_url->shop_image1 != null ? $obj[0]->image_url->shop_image1 : "https://placehold.jp/240x240.png?text=No Image"?>
                    <img src="{{$src}}" class="card-img-top" alt="...">

                </div>
                {{--<div class="col-md-8">--}}
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">{{$obj[0]->name}}</h4>
                        <hr class="my-2">
                        <p class="card-text"><i class="fas fa-map-marker-alt mr-3"></i>{{$obj[0]->address}}</p>
                        <p class="card-text"><i class="fas fa-phone mr-3"></i>{{$obj[0]->tel}}</p>
                        <p class="card-text"><i class="fas fa-clock mr-3"></i>{{$obj[0]->opentime}}</p>
                        <a class="btn btn-primary " href="{{url()->previous()}}" role="button">戻る</a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
@include('layouts.footer')
