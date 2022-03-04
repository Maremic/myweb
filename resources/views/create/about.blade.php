<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/abouts">
                @csrf

                <h1> Create about section</h1>

                <x-form.input name="sctitle" required />

                <x-form.textarea name="section" required />

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
