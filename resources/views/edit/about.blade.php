<x-layout>
        <form method="POST" action="{{ route('abouts.update', $about->id) }}">
            @csrf
            @method('PATCH')

            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="row d-flex justify-content-center m-auto">
                        <h1> Edit about section</h1>
                    </div>
                    <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                        <x-form.input name="sctitle" :value="old('sctitle', $about->sctitle)" required />
                    </div>
                    <div class="textarea row d-flex justify-content-center pt-5">
                        <x-form.textarea name="section" required>{{ old('section', $about->section) }}</x-form.textarea>
                    </div>
                    <div class=" d-flex justify-content-center pt-5">
                        <button type="submit" formnovalidate="formnovalidate" class="btn btn-warning">Update</button>
                    </div>
                        <x-form.error name="sctitle"/>
                        <x-form.error name="section"/>
                    </form>
                </div>
            </div>
        </form>
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
