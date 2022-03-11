<x-layout>
<div class="container">
    <div class="row d-flex flex-column h-25">
        @auth
            <h1>Welcome back! Lets do something new!</h1>
        @else
            <h1>Welcome to my personal website !</h1>
        @endauth
    </div>
        <div class="row d-flex flex-row h-50">
            <div class="col-md-6 col-lg-6 d-flex flex-column">
                <div class="quote">
                    <h2>“Be happy for this moment. This moment is your life.“<h2>

                    <h3 class="float-start">-Omar Khayyam<h3>

                </div>
                <div class="quote">
                    <h2>“You have power over your mind – not outside events. Realize this, and you will find strength.”<h2>

                    <h3 class="float-start">-Marcus Aurelius<h3>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 h-100">
                <img src="{{URL::asset('/images/Avatar-Maker.png')}}" alt="" class="sectionimage"/>
            </div>
        </div>
    <div class="row d-flex flex-column h-25">

    </div>
</div>
</x-layout>
