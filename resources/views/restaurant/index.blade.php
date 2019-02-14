@extends('layouts.master')

@section('title','一覧')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')

<p class="alert alert-light text-left"><i class="fas fa-exclamation-triangle"></i> {{$array->total_hit_count}}店舗ヒットしました</p>
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
                    <h5 class="card-title"><a href="/restaurant/{{$item->id}}" class="card-link text-info">{{$item->name}}</a></h5>
                    @if($item->access->line != null)
                        <p class="card-text"><i class="fas fa-subway mr-2"></i> {{$item->access->line}}{{$item->access->station}} {{$item->access->station_exit}} 徒歩{{$item->access->walk}}分</p>
                    @else
                        <p class="card-text"><i class="fas fa-subway mr-2"></i>   記載なし</p>
                    @endif
                    @if($item->access->note != null)
                        <p class="card-text"><i class="fas fa-pencil-alt mr-2"></i>   {{$item->access->note}}</p>
                    @else
                        <p class="card-text"><i class="fas fa-pencil-alt mr-2"></i>   記載なし</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <?php $maxcount=$array->total_hit_count/10 + 1?>
    <div class="mx-auto">
        <nav aria-label="...">
            <ul class="pagination">
                @if($array->page_offset==1)
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{url()->full()}}&page={{$array->page_offset-1}}">Previous</a>
                    </li>
                @endif

                @for($i=$array->page_offset;$i<$array->page_offset+5;$i++)
                    @if($array->page_offset==$i)
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="{url()->full()}}&page={{$i}}">{{$i}}<span class="sr-only">(current)</span></a>
                            </li>
                    @else
                            <li class="page-item"><a class="page-link" href="{{url()->full()}}&page={{$i}}">{{$i}}</a></li>
                    @endif
                @endfor

                @if($array->page_offset==$maxcount)
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{url()->full()}}&page={{$array->page_offset+1}}">Next</a>
                    </li>
                @endif

            </ul>
        </nav>
    </div>
</div>


@endsection
@include('layouts.footer')
