<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/abouts">
                @csrf
            <div class="row d-flex justify-content-center m-auto">
                <h1> Create about section</h1>
            </div>
            <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                <x-form.input name="sctitle" required />
            </div>
            <div class="row textarea d-flex justify-content-center m-auto">
                <x-form.textarea name="section" required/>
            </div>
            <div class=" d-flex justify-content-center pt-5">
                <button type="submit" formnovalidate="formnovalidate" class="btn btn-warning">Submit</button>
            </div>
                <x-form.error name="sctitle"/>
                <x-form.error name="section"/>
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
