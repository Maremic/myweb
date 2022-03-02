<x-layout>
    <section class="">
        <main class="">

            <h1 class="">Log In!</h1>

            <form method="POST" action="/login" class="">
                @csrf

                <x-form.input name="email" type="email" autocomplete="username" required />
                <x-form.input name="password" type="password" autocomplete="current-password" required />

                <x-form.button>Log In</x-form.button>
            </form>

        </main>
    </section>
</x-layout>
