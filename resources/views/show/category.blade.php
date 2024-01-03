<x-layout>
    <div class="flex-center position-ref full-height">
       @auth
            <div class="d-flex justify-content-between">
                <form action="{{ route('category.destroy', $category->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">❌</button>
                </form>
                <a href="/category/{{$category->id}}/section/create" class="btn btn-success">💬</a>
            </div>
        @endauth
        <div class="content">
            <div class="header row d-flex flex-column h-25">
                <h1>{{$category->title}}</h1>
            </div>
                    <div class="accordion" id="stayopen">
                        @foreach ($category->sections as $section)
                                <div class="accordion-item">
                                    @auth
                                        <div class="adminmenu float-end flex">
                                            <button class="btn btn-warning"><a href="/sections/{{$section->id}}/edit">✍</a></button>
                                            <form action="{{ route('sections.destroy', $section->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">❌</button>
                                            </form>
                                        </div>
                                    @endauth
                                    <div class="sctitle section about">{{ $section->title }}</div>
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapse{{$section->id}}" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapse{{$section->id}}">
                                            </button>
                                        </h2>
                                    <div id="panelsStayOpen-collapse{{$section->id}}" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-heading{{$section->id}}">
                                        <div class="accordion-body">
                                            <strong>{!! $section->text !!}</strong>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $category->sections()->paginate(10)->links() !!}
                    </div>
        </div>
    </div>
</x-layout>
