<!DOCTYPE html>
<html lang="en">
<head>
    @include('tema::layouts.head')
    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/tema.css') }}"> --}}
    @yield('style')
</head>
<body class="page-profile">
    @include('tema::layouts.header')
    @include('tema::layouts.content')
    @include('tema::layouts.footer')
    @include('tema::layouts.javascript')
</body>
</html>


