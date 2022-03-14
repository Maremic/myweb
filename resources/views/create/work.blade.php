<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/works" enctype="multipart/form-data">
                @csrf

                <div class="row d-flex justify-content-center m-auto">
                    <h1> Create Work Gallery Item</h1>
                </div>


                <div class="row d-flex justify-content-center m-auto">
                    <x-form.input name="title" required />
                </div>
                <div class="row textarea d-flex justify-content-center m-auto">
                    <x-form.textarea name="excerpt" required />
                </div>
                <div class="row d-flex justify-content-center m-auto">
                    <x-form.input name="slug" required/>
                </div>
                <div class="row d-flex justify-content-center m-auto">
                    <x-form.input name="image" type="file"/>
                </div>
                <x-form.submit/>
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

