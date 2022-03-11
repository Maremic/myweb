<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="{{ route('hobbies.update', $hobby->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="row d-flex justify-content-center m-auto">
                    <h1> Edit Hobbies section</h1>
                </div>


                <div class="row d-flex justify-content-center m-auto">
                    <x-form.input name="sctitle" :value="old('sctitle', $hobby->sctitle)" required  />
                </div>
                <div class="row textarea d-flex justify-content-center m-auto">
                    <x-form.textarea name="section" required>{{ old('section', $hobby->section) }}</x-form.textarea>
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
        .create( document.querySelector( '#section' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],

        } )
        .catch( error => {
            console.log( error );

        } );
    </script>
</x-layout>
