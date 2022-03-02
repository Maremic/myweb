@props(['post'])

<article
    {{ $attributes->merge(['class' => '']) }}>
    <div class="">
        <div>
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="">
            <header>

                <div class="">
                    <h1 class="">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="">
                {!! $post->excerpt !!}
            </div>

            <footer class="">
                <div class="">
                    <div class="">
                        <h5 class="">
                            <a href="#"></a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $post->slug }}"
                       class=""
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
