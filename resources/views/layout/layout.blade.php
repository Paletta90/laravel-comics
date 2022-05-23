<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>

    {{-- header --}}
    @include('partials.header')

    {{-- Jumbotron --}}
    <section>
        @include('partials.jumbotron')
    </section>

    {{-- main --}}
    {{-- Corpo centrale --}}
    <main>
         @yield('content')
    </main>

    {{-- Link --}}
    <section>
        @include('partials.link')
    </section>

    {{-- Footer --}}
    <footer>

        {{-- footer Link --}}
        <div class="footerTop">
            @include('partials.footer')
        </div>

        {{-- footer bottom --}}
        <div class="footerBottom">
            @include('partials.footerBottom')
        </div>

    </footer>

</body>

</html>
