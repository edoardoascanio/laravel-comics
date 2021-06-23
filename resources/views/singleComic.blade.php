@extends('layouts.default')

@section('title', 'Dettagli comic')

@section('header_scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="banner"></div>

<div class="center-block">
    <div class="comic-card">
        <div class="poster">
            <img src="{{$chosenComic['thumb']}}" alt="">
            <div class="book">
                <p>COMIC BOOK</p>
            </div>

            <div class="view">
                <p>VIEW GALLERY</p>
            </div>
        </div>

        <div class="title">
            <h1>{{$chosenComic ["title"]}}</h1>
        </div>

        <div class="specifics">

            <div class="caption">

                <div class="green-banner">
                    <div class="price">
                        <div class="cost">
                            <p>U.S Price: </p>
                            <strong> {{$chosenComic ["price"]}}</strong>
                        </div>

                        <p>AVAILABLE</p>
                    </div>

                    <div class="check">
                        <button>Check Availability <i class="fa fa-caret-down"></i></button>
                    </div>
                </div>

                <div class="description">
                    <p>{{$chosenComic ["description"]}}</p>
                </div>
            </div>

            <div class="adv">
                <strong>ADVERTISEMENT</strong>
                <img src="{{asset('images/adv.jpg')}}" alt="games-list">
            </div>

        </div>
    </div>
</div>

<section class="grey-section">
    <div class="center-block">
        <div class="comic-card">
            <div class="table">

                <div class="talent">
                    <h2>Talent</h2>

                    <div class="artists">
                        <strong>Art by:</strong>

                        <div class="list">
                            <p>{{$chosenComic ["artists"]}}</p>
                        </div>
                    </div>

                    <div class="writers">
                        <strong>Written by:</strong>

                        <div class="list">
                            <p>{{$chosenComic ["writers"]}}</p>
                        </div>
                    </div>

                </div>

                <div class="specs">
                    <h2>Specs</h2>

                    <div class="artists">
                        <strong>Series:</strong>

                        <div class="list">
                            <p>{{$chosenComic ["series"]}}</p>
                        </div>
                    </div>

                    <div class="writers">
                        <strong>U.S Price:</strong>

                        <div class="data">
                            <p>{{$chosenComic ["price"]}}</p>
                        </div>
                    </div>


                    <div class="writers">
                        <strong>On Sale Date:</strong>

                        <div class="data">
                            <p>{{$chosenComic ["sale_date"]}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
