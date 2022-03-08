<x-layout>
    <div class="flex-center position-ref full-height">
        <a href="/abouts/create"><button class="btn btn-success float-end">💬</button></a>
        <div class="content">
            <div class="header">
                <h1>About me</h1>
            </div>
                    @foreach ($allAbouts as $about)
                    <div class="float-end adminmenu">
                        <form action="{{ route('abouts.destroy', $about->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">❌</button>
                        </form>
                        <button class="btn btn-warning"><a href="/abouts/{{$about->id}}/edit">✍</a></button>

                    </div>
                        <div class="section about row">
                            <div class="sctitle">{{ $about->sctitle }}</div>
                        </div>
                        <div class="wrapper">
                            <span class="section-text">{!! $about->section !!}</span>
                        </div>
                    @endforeach
        </div>
    </div>
</x-layout>
