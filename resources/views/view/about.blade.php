<x-layout>
    <div class="flex-center position-ref full-height">
        @auth
            <a href="/abouts/create"><button class="btn btn-success float-end">💬</button></a>
        @endauth
        <div class="content">
            <div class="header">
                <h1>About me</h1>
            </div>
                    <div class="accordion" id="stayopen">
                        @foreach ($allAbouts as $about)
                                <div class="accordion-item">
                                    @auth
                                        <div class="adminmenu float-end flex">
                                            <button class="btn btn-warning"><a href="/abouts/{{$about->id}}/edit">✍</a></button>
                                            <form action="{{ route('abouts.destroy', $about->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">❌</button>
                                            </form>
                                        </div>
                                    @endauth
                                    <div class="sctitle about">{{ $about->sctitle }}</div>
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapse{{$about->id}}" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapse{{$about->id}}">
                                            </button>
                                        </h2>
                                    <div id="panelsStayOpen-collapse{{$about->id}}" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-heading{{$about->id}}">
                                        <div class="accordion-body">
                                            <strong>{!! $about->section !!}</strong>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
        </div>
    </div>
</x-layout>
