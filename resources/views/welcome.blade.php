<x-layout>
<div class="container">
    <div class="row d-flex flex-column h-25">
        @auth
            <h1>Welcome back! Lets do something new!</h1>
        @else
            <h1>Helsink</h1>
        @endauth
    </div>
        <div class="row d-flex flex-row h-50">
            <div class="col-md-6 col-lg-6 d-flex flex-column">
            <div class="quote">
                    <h2>“No one can confidently say that he will still be living tomorrow.”<h2>

                    <h3 class="float-start">- Euripides<h3>

                </div>
                <div class="quote">
                    <h2>“You could leave life right now. Let that determine what you do and say and think.”<h2>

                    <h3 class="float-start">- Meditations  2.11<h3>

                </div>
                <div class="quote">
                    <h2> “Begin doing what you want to do now. We are not living in eternity. We have only this moment, sparkling like a star in our hand – and melting like a snowflake.”<h2>

                    <h3 class="float-start">- Francis Bacon<h3>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 h-100 m-auto">
                <img src="{{URL::asset('/images/helsink.jpg')}}" alt="" class="sectionimage"/>
            </div>
        </div>
    <div class="row d-flex flex-column h-25">

    </div>
</div>
</x-layout>
