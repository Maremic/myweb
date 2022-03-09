<x-layout>
    <section class="">
        <main class="">

            <h1 class="">Log In!</h1>

            <form method="POST" action="/login" class="">
                @csrf
                <div class="pt-3">
                    <x-form.input name="email" type="email" autocomplete="username" required />
                </div>
                <div class="pt-3">
                    <x-form.input name="password" type="password" autocomplete="current-password" required />
                </div>
                <div class="pt-3">
                    <x-form.button>Log In</x-form.button>
                </div>
            </form>

        </main>
    </section>
</x-layout>
