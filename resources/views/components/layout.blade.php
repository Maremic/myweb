<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>MMs Home</title>
</head>
<div class="container-lg border main">

    <header class="row">
        <div class="col-md-2 d-none d-md-block">MMw</div><div class="col-md">Mareš Michal Website</div>
    </header>

    <main class="row">
        <nav class="col-xs-2">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Me</a></li>
                <li><a href="/works-gallery">Works Gallery</a></li>
                <li><a href="/cats">Cats</a></li>
                <li><a href="/contacts">Contacts</a></li>
            </ul>
        </nav>
        <div class="col">{{ $slot }}</div>
        <div class="col-xs-2">news, other stuff, nothing</div>
    </main>

    <footer class="row">
        <div class="col-12">Mareš Michal 2022</div>
    </footer>

    <body>
        <div>

        </div>
    </body>
</div>
</html>
