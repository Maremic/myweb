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
            {{-- vytvořit responsivní navbar, co se schová do loga místo aby mizelo na malé obrazovce
            dále vytvořit modely a form pro přidávání obrázku na stránku (pouze pro adminy stránky)
            vytvořit lepší routing a postupně komponenty
            nahrávání obrázku vytvořit i pro "cats", vytvořit jednu stránku pro přidávání contentu
            asi bude složitější ale kdyžtak obšlehnu Wayovu cestu s poustama

            pak musím využít dropdrown item od waye a kouknout jak formátuje stránku, přes bootstrap s col to nemím--}}
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
