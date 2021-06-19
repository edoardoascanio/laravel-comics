<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   
</head>

<body>
    @yield('content')

    
</body>

</html>