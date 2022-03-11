<x-layout>
    <div class="flex-center position-ref full-height">
        @auth
            <a href="/works/create"><button class="btn btn-success float-end">💬</button></a>
        @endauth
        <div class="content">
            <div class="header">
                <h1 class="display-2">Works Gallery</h1>
            </div>
                    <div class="accordion" id="stayopen">
                        @foreach ($allWorks as $work)
                                <div class="accordion-item">
                                    @auth
                                        <div class="adminmenu float-end flex">
                                            <button class="btn btn-warning"><a href="/works/{{$work->id}}/edit">✍</a></button>
                                            <form action="{{ route('works.destroy', $work->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">❌</button>
                                            </form>
                                        </div>
                                    @endauth
                                    <div class="sctitle about">{{ $work->title }}</div>
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapse{{$work->id}}" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapse{{$work->id}}">
                                            </button>
                                        </h2>
                                    <div id="panelsStayOpen-collapse{{$work->id}}" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-heading{{$work->id}}">
                                        <div class="accordion-body row">
                                            <div class="col-md-6"><strong>{!! $work->excerpt !!}</strong></div>
                                            <div class="col-md-6"><a href="{{ asset('storage/' . $work->image) }}"><img src="{{ asset('storage/' . $work->image) }}" alt="" class="rounded-xl sectionimage"></a></div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
        </div>
    </div>
</x-layout>
