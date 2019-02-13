@extends('layouts.master')

@section('title','詳細')
@include('layouts.head')
@include('layouts.header')
@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">グルメサーチ</h1>
        <p>現在地からレストランを探すサービスです．</p>
        <a class="btn btn-primary btn-lg" href="{{url('/search')}}" role="button">START</a>
    </div>
@endsection
@include('layouts.footer')

