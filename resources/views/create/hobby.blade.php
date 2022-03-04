<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/hobbies" enctype="multipart/form-data">
                @csrf

                <h1> Create Hobby section</h1>

                <x-form.input name="sctitle" required />

                <x-form.textarea name="section" required />

                <x-form.input name="image" type="file"/>


                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
