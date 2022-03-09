<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="{{ route('works.update', $work->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="row d-flex justify-content-center m-auto">
                    <h1> Edit Work Gallery Item</h1>
                </div>


                <div class="row d-flex justify-content-center m-auto">
                    <x-form.input name="title" :value="old('title', $work->title)" required  />
                </div>
                <div class="row textarea d-flex justify-content-center m-auto">
                    <x-form.textarea name="excerpt" required>{{ old('excerpt', $work->excerpt) }}</x-form.textarea>
                </div>
                <div class="row d-flex justify-content-center m-auto">
                    <x-form.input name="slug" :value="old('slug', $work->slug)" required />
                </div>
                <div class="row d-flex justify-content-center m-auto">
                    <x-form.input name="image" type="file" />
                </div>

                <div class=" d-flex justify-content-center pt-5">
                    <button type="submit" formnovalidate="formnovalidate" class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
            ClassicEditor
        .create( document.querySelector( '#excerpt' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],

        } )
        .catch( error => {
            console.log( error );

        } );
    </script>
</x-layout>
