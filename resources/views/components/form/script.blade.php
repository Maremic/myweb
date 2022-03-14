<script>
    ClassicEditor
        .create( document.querySelector( '#section' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],

        } )
        .catch( error => {
            console.log( error );

        } );
</script>
