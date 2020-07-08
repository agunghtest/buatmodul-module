<!DOCTYPE html>
<html lang="en">
<head>
    @include('tema::layouts.head')
    <!-- end tema -->
    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/tema.css') }}"> --}}
    @yield('style')

</head>
<body class="page-profile">
  @include('tema::layouts.header')
  <div class="content content-fixed content-auth">
      <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
            @yield('content')
        </div>
    </div>
</div>
@include('tema::layouts.footer')
@include('tema::layouts.javascript')
</body>
</html>


