<!DOCTYPE html>
<body class="light">
<x-headscripts>
<div class="container-lg main vh-100 vw-100">
    <x-header/>
    <main class="row">
        <x-sidr/>
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="col-sm-10">
                    {{$slot}}
                </div>
                <x-contacts/>
            </div>
        </div>

    </main>

    <x-footer/>
    <x-flash/>
    </x-headscripts>
</div>
</body>
</html>
