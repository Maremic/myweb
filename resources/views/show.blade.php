<x-layout>
    <main class="">
        <article class="">
            <div class="">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="">

                <p class="">
                    Published
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>

                <div class="">
                    <div class="">
                        <h5 class="">
                            <a href="/?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    <a href="/"
                       class="">

                        Back to Posts
                    </a>
                </div>

                <h1 class="">
                    {{ $post->title }}
                </h1>

                <div class="">{!! $post->body !!}</div>
            </div>
        </article>
    </main>
</x-layout>
