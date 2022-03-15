<div id="sidr">
    <ul class="d-flex-column">
        <li><a href="/">Home</a></li>
        <li><a href="/abouts">About Me</a></li>
        <li><a href="/works">Works Gallery</a></li>
        <li><a href="/hobbies">Hobbies</a></li>
        {{-- uncomment for dark/light mode button, but site is not in bs colors for using this right now --}}
        {{-- <li class="nav-item ml-md-auto"><a href="#" class="btn btn-warning switch">Switch Light/Dark</a></li> --}}
        @auth
                    <li><a
                        href="/logout"
                        @click.prevent="document.querySelector('#logout-form').submit()">
                        Welcome, {{ auth()->user()->name }}!
                    </a>
                    </li>
                    <li><a href="/abouts/create">Create About Section</a></li>
                    <li><a href="/works/create">Create Works Section</a></li>
                    <li><a href="/hobbies/create">Create Hobby Section</a></li>


        @endauth
    </ul>

</div>
