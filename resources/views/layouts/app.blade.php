<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page', '')</title>
    <!--Yeld CDN -->
    @yield('cdn-yeld')
    <!--Serve a includere il file JS-->
    @vite('resources/js/app.js')
</head>
<body>
    @yield('main-content')
</body>
</html>
