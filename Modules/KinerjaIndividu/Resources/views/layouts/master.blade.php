<!DOCTYPE html>
<html lang="en">
<head>
    @include('tema::layouts.head')
    <!-- end tema -->
    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/tema.css') }}"> --}}
    @yield('style')
    <link rel="stylesheet" href="{{asset('tema/assets/css/dashforge.chat.css')}}">
</head>
<body class="app-chat">
    @include('tema::layouts.header')
        @yield('content')
    @include('tema::layouts.footer')
    @include('tema::layouts.javascript')
    <script src="{{asset('tema/assets/js/dashforge.chat.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        if(window.matchMedia('(min-width: 768px)').matches) {
          $('body').addClass('show-sidebar-right');
          $('#showMemberList').addClass('active');
        }

        window.darkMode = function(){
          $('.btn-white').addClass('btn-dark').removeClass('btn-white');
        }

        window.lightMode = function() {
          $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if(hasMode === 'dark') {
          darkMode();
        } else {
          lightMode();
        }
      })
    </script>
</body>
</html>
