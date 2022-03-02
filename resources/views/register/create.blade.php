<x-layout>
    <section class="">
        <main class="">

            <h1 class="">Register!</h1>

            <form method="POST" action="/register" class="">
                @csrf

                <x-form.input name="name" required />
                <x-form.input name="username" required />
                <x-form.input name="email" type="email" required />
                <x-form.input name="password" type="password" autocomplete="new-password" required />
                <x-form.button>Sign Up</x-form.button>
            </form>

        </main>
    </section>
</x-layout>
