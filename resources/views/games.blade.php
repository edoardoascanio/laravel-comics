<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.header')


    <section class="characters-container">

        <div class="center-block">
            <img src="{{asset('images/games.jpg')}}" alt="games-list">
        </div>

    </section>

    <section class="main-icons">

        <div class="center-block">

            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="digital-comics">
            <h5>DIGITAL COMICS</h5>

            <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="merchandise">
            <h5>DC MERCHANDISE</h5>

            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="shop-locator">
            <h5>SUBSCRIPTIONS</h5>

            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="subscriptions">
            <h5>COMIC SHOP LOCATOR</h5>

            <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="power-visa">
            <h5>DC POWER VISA</h5>

        </div>

    </section>
    @include('partials.footer')
</body>
</html>
