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


    <section>
        <div class="center-block">
            <h1>HOMEPAGE</h1>
        </div>
    </section>


    @include('partials.footer')

</body>

</html>
