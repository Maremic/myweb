<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/works" enctype="multipart/form-data">
                @csrf

                <h1> Create Work Gallery item</h1>

                <x-form.input name="title" required />

                <x-form.textarea name="excerpt" required />

                <x-form.input name="slug" required/>

                <x-form.input name="image" type="file"/>


                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</x-layout>

