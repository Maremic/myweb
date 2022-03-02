
<x-layout>
        <div class="">
            <div class="">
                <div class="">
                    <div class="">
                        <table class="">
                            <tbody class="">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="">
                                            <div class="">
                                                <div class="">
                                                    <a href="/posts/{{ $post->slug }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="">
                                            <a href="/admin/posts/{{ $post->id }}/edit" class="">Edit</a>
                                        </td>

                                        <td class="">
                                            <form method="POST" action="/admin/posts/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
