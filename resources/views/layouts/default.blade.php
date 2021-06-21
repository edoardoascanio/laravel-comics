<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @yield('header_scripts')
</head>

<body>
    @include('partials.header')


    <div class="welcome">
        <div class="center-block">
            <h1>WELCOME TO DC</h1>
        </div>
    </div>

    <section class="characters-container">
        <img src="{{asset('images/homepage.jpg')}}" alt="homepage">
    </section>


    @include('partials.footer')

</body>

</html>
