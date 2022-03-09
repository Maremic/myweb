<x-layout>
    <section class="">
        <main class="">

            <h1 class="">Register!</h1>

            <form method="POST" action="/register" class="justify-content-center">
                @csrf
                <div class="pt-3">
                    <x-form.input name="name" required />
                </div>
                <div class="pt-3">
                    <x-form.input name="username" required />
                </div>
                <div class="pt-3">
                    <x-form.input name="email" type="email" required />
                </div>
                <div class="pt-3">
                    <x-form.input name="password" type="password" autocomplete="new-password" required />
                </div>
                <div class="pt-3">
                    <x-form.button>Sign Up</x-form.button>
                </div>
            </form>

        </main>
    </section>
</x-layout>
