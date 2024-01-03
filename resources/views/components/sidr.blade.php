<div id="sidr" class="modal">
    <div class="modal-content" style="max-height:50vh; min-height:50vh;">
        <span class="close" onclick="closeModal()">&times;</span>
        <ul class="d-flex-column" style="background-color: transparent; max-height: 30vh; margin-top:10%; padding:0; overflow-y: auto; max-width:60%">
            <li><a href="/" style="color: black;">Domů</a></li>
            @foreach (App\Models\Category::all() as $category)
                <li><a href="/category/{{$category->id}}" style="color: black;">{{$category->title}}</a></li>
            @endforeach
            {{-- uncomment for dark/light mode button, but the site is not in bs colors for using this right now --}}
            {{-- <li class="nav-item ml-md-auto"><a href="#" class="btn btn-warning switch">Switch Light/Dark</a></li> --}}
            @auth
                <li><a href="/logout" @click.prevent="document.querySelector('#logout-form').submit()"
                        style="color: black;">Welcome, {{ auth()->user()->name }}!</a></li>
                <li><a href="/category/create" style="color: black;">Create category</a></li>
            @endauth
        </ul>
    </div>
</div>

