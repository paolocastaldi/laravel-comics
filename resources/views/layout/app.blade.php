<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} - @yield('paragrafo_name')</title> 

    @vite('resources/js/app.js') 

    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">

</head>
<body>
    @include('partials.header')

    <main>
        @yield('main_content')
    </main>

    @include('partials.footer')

</body>
</html>