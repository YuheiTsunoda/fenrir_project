@extends('layouts.master')

@section('title','詳細')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')
    <div class="jumbotron mb-0" style="min-height: 700px">
        <div class="card mx-auto" style="max-width: 440px;">
            <div class="card-body text-center bg-gradient-light mx-auto" >
                <h1 class="display-4 card-title">グルメサーチ</h1>
                <p class="card-text">現在地からレストランを探すサービスです．</p>
                <a class="btn btn-primary btn-lg " href="{{url('/search')}}" role="button">START</a>
            </div>
        </div>
    </div>
@endsection
@include('layouts.footer')

