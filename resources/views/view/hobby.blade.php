<x-layout>
    <div class="flex-center position-ref full-height">
        <a href="/hobbies/create">+</a>
        <div class="content">
            <h1>My Hobbies</h1>
                    @foreach ($allHobbies as $hobby)
                            <div><img src="{{ asset('storage/' . $hobby->image) }}" alt="" class="rounded-xl"></div>
                            <div><h2>{{ $hobby->sctitle }}</h2></div>
                            <div><p>{{ $hobby->section }}</p></div>
                    @endforeach
        </div>
    </div>
</x-layout>
