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
    {{--CKeditor--}}
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

    <title>Helsink</title>
</head>

{{$slot}}

<!-- Include jQuery -->
<script src="//cdn.jsdelivr.net/jquery/2.2.0/jquery.min.js"></script>
<!-- Include the Sidr JS -->
    <script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
{{-- alpine for flash --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
{{--sidr funcionality--}}
    <script>
    $(document).ready(function () {
    // Show the modal when clicking the simple-menu button
    $('#simple-menu').click(function () {
        $('#sidr').fadeIn();
    });

    // Close the modal when clicking the close button or outside the modal
    window.onclick = function (event) {
        if (event.target == document.getElementById('sidr')) {
            closeModal();
        }
    };
    });

    // Function to close the modal
    function closeModal() {
        $('#sidr').fadeOut();
    }

    // when used elements like, bg-light, text-dark, etc, it can switch bs-colors, this version is not in memory or cookies,
    // kinda like dark mode on sites with videos u can "darken" screen for that moment
    //but I will had to change all site to bootstrap colors to get used of this :( maybe later or if i can reach better solution.

    $('.switch').on( "click" ,function (){
        $([".light [class*='-light']", ".dark [class*='-dark']"]).each((i,ele)=>{
            $(ele).toggleClass('bg-light bg-dark')
            $(ele).toggleClass('text-light text-dark')
            $(ele).toggleClass('navbar-light navbar-dark')
            $(ele).toggleClass('btn-light btn-dark')
            })
            // toggle body class selector
            $('body').toggleClass('light dark')
            })
    </script>
