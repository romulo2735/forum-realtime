<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Forum Realtime</title>
</head>
<body>
    <header>
        @include('layouts.base.header')
    </header>

    <main>
        <section>
            @yield('content')
        </section>
    </main>


    @include('layouts.base.footer')
    @component('layouts.base.scripts')
        @yield('scripts')
    @endcomponent
</body>
</html>