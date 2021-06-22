@extends('layouts.default')

@section('title', 'comics')

@section('header_scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')
<section class="comics-container">
    <div class="center-block">

        <div class="series">
            <h3>CURRENT SERIES</h3>
        </div>
        <div class="comics-list">
            @foreach($comicsList as $comics)

            <div class="card">
                <img src="{{ $comics['thumb'] }}" alt="">
                <h5>{{ $comics['title']}}</h5>
                {{-- <a href="{{route('singleComic')}}"></a> --}}
            </div>

            @endforeach
        </div>

        <div class="load">
            <button>LOAD MORE</button>
        </div>
    </div>
</section>
@endsection
