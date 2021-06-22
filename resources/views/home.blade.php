@extends('layouts.default')

@section('title', 'welcome')

@section('header_scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
@endsection


@section('content')
<div class="welcome">
        <div class="center-block">
            <h1>WELCOME TO DC</h1>
        </div>
    </div>

    <section class="characters-container">
        <img src="{{asset('images/homepage.jpg')}}" alt="homepage">
    </section>
@endsection
