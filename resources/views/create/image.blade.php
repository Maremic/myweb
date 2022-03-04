<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/imagesg" enctype="multipart/form-data">
                @csrf

                <h1> Create Image</h1>

                <x-form.input name="title" required />

                <x-form.input name="image" type="file"/>


                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</x-layout>


