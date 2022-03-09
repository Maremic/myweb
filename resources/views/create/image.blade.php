<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/imagesg" enctype="multipart/form-data">
                @csrf

                <div class="row d-flex justify-content-center m-auto">
                    <h1> Create image</h1>
                </div>

                <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                    <x-form.input name="title" required />
                </div>
                <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                    <x-form.input name="image" type="file"/>
                </div>
                <div class=" d-flex justify-content-center pt-5">
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>


