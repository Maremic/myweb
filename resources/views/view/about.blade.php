<x-layout>
    <div class="flex-center position-ref full-height">
        <a href="/abouts/create">+</a>
        <div class="content">
            <h1>About me</h1>
                    @foreach ($allAbouts as $about)
                            <div><h2>{{ $about->sctitle }}</h2></div>
                            <div><p>{{ $about->section }}</p></div>
                    @endforeach
        </div>
    </div>
</x-layout>

