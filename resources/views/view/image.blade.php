<x-layout>
    <div class="flex-center position-ref full-height">
        <a href="/imagesg/create">+</a>
        <div class="content">
            <h1>Images Gallery</h1>
                    @foreach ($allImages as $image)
                            <div><img src="{{ asset('storage/' . $image->image) }}" alt="" class="rounded-xl"></div>
                            <div><h2>{{ $image->title }}</h2></div>
                    @endforeach
        </div>
    </div>
</x-layout>
