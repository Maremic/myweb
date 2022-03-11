<x-layout>
    <div class="flex-center position-ref full-height">
        @auth
            <a href="/hobbies/create"><button class="btn btn-success float-end">💬</button></a>
        @endauth
        <div class="content">
            <div class="header">
                <h1 class="display-2">Hobbies</h1>
            </div>
                    <div class="accordion" id="stayopen">
                        @foreach ($allHobbies as $hobby)
                                <div class="accordion-item">
                                    @auth
                                        <div class="adminmenu float-end flex">
                                            <button class="btn btn-warning"><a href="/hobbies/{{$hobby->id}}/edit">✍</a></button>
                                            <form action="{{ route('hobbies.destroy', $hobby->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">❌</button>
                                            </form>
                                        </div>
                                    @endauth
                                    <div class="sctitle about">{{ $hobby->sctitle }}</div>
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapse{{$hobby->id}}" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapse{{$hobby->id}}">
                                            </button>
                                        </h2>
                                    <div id="panelsStayOpen-collapse{{$hobby->id}}" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-heading{{$hobby->id}}">
                                        <div class="accordion-body row">
                                            <div class="col-md-6"><strong>{!! $hobby->section !!}</strong></div>
                                            <div class="col-md-6"><a href="{{ asset('storage/' . $hobby->image) }}"><img src="{{ asset('storage/' . $hobby->image) }}" alt="" class="rounded-xl sectionimage"></a></div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
        </div>
    </div>
</x-layout>
