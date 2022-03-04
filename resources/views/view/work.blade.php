<x-layout>
    <div class="flex-center position-ref full-height">
        <a href="/works/create">+</a>
        <div class="content">
            <h1>Works Gallery</h1>
                    @foreach ($allWorks as $work)
                            <div><img src="{{ asset('storage/' . $work->image) }}" alt="" class="rounded-xl"></div>
                            <div><h2>{{ $work->title }}</h2></div>
                            <div><p>{{ $work->excerpt }}</p></div>
                    @endforeach
        </div>
    </div>
</x-layout>
