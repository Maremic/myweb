<!DOCTYPE html>
<body class="light">
<x-headscripts>
<div class="container-lg main vh-100 vw-100">
    <main class="row">
        <div class="col-md-12 col-sm-12">
        <x-sidr/>
            <div class="row">
                <div class="col-sm-10">
                <a id="simple-menu" href="#sidr" style="display: block; font-size: 24px; text-align: left;">
                    📜
                </a>
                    {{$slot}}
                </div>
            </div>
        </div>

    </main>

    <x-footer/>
    <x-flash/>
    </x-headscripts>
</div>
</body>
</html>
