@extends('layouts.default')

@section('title', 'TV')

@section('header_scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')
<section class="container">

    <div class="center-block">
        <img src="{{asset('images/tv.jpg')}}" alt="tv-series-list">
    </div>

</section>
@endsection
