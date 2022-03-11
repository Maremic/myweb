<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="{{ URL::asset('favicon-32x32.png') }}" type="image/x-icon"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include a Sidr bundled CSS theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">
    {{-- alpine for flash --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    {{--CKeditor--}}
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

    <title>𝖬𝖬𝖶 {{ Route::currentRouteName() }}</title>
</head>
<div class="container-lg main vh-100 vw-100">

    <header class="row">
        <div id="menu" class="col-md-2 col-sm-12">
            <a id="simple-menu" href="#sidr">
                <button type="button" class="btn btn-warning">Menu</button>
            </a>

        </div>
        <div class="col-md-8 d-none d-md-block headerimage"></div>
        <div class="col-md-2"><h1 class="mt-4"><img src="{{URL::asset('/images/logonobg.png')}}"/></div>
    </header>
    <main class="row">
        <div id="sidr">
            <ul class="d-flex-column">
                <li><a href="/">Home</a></li>
                <li><a href="/abouts">About Me</a></li>
                <li><a href="/works">Works Gallery</a></li>
                <li><a href="/hobbies">Hobbies</a></li>
                @auth
                            <li><a
                                href="/logout"
                                @click.prevent="document.querySelector('#logout-form').submit()">
                                Welcome, {{ auth()->user()->name }}!
                            </a>
                            </li>
                {{-- @else
                    <li><a href="/register"
                       class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">
                        Register
                    </a></li>

                    <li><a href="/login"
                       class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">
                        Log In
                    </a></li> --}}
                @endauth
            </ul>

        </div>
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="col-sm-10">
                    {{$slot}}
                </div>
                <div class="col-sm-2 no-padding position-sm-static position-md-static position-lg-relative position-xl-relative" id="page-wrap">
                    <div id="sidebar" class="position-sm-static position-md-static position-lg-fixed position-xl-fixed">
                        <div class="wrapper">
                        </div>
                        <ul class="no-padding">
                            <li class="ctlist"><a href="https://github.com/Maremic" target="_blank">👾 GitHub</a></li>
                            <li class="ctlist"><a href="https://www.linkedin.com/in/michal-mare%C5%A1-049b96225/" target="_blank">👔 LinkedIn</a></li>
                            <li class="ctlist">📜 misak.mares@gmail.com</li>
                            <li class="ctlist">📞 +420 601 553 044</li>
                        </ul>
                    <div>
                </div>
            </div>
        </div>

    </main>

    <footer class="footer fixed-bottom">
        <div class="container">
          <span class="text-muted">Copyright © Mareš Michal, 2022</span>
        </div>
      </footer>
    <x-flash/>

        <!-- Include jQuery -->
            <script src="//cdn.jsdelivr.net/jquery/2.2.0/jquery.min.js"></script>
        <!-- Include the Sidr JS -->
            <script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
        {{-- alpine for flash --}}
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        {{--sidr funcionality--}}
            <script>
            $(document).ready(function() {
                $('#simple-menu').sidr();
            });
            </script>
</div>
</html>
