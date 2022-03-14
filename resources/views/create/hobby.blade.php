<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/hobbies" enctype="multipart/form-data">
                @csrf
                <div class="row d-flex justify-content-center m-auto">
                    <h1> Create Hobby section</h1>
                </div>
                <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                    <x-form.input name="sctitle" required />
                </div>
                <div class="textarea row d-flex justify-content-center pt-5">
                    <x-form.textarea name="section" required />
                </div>
                <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                    <x-form.input name="image" type="file"/>
                </div>
                <x-form.submit/>
            </form>
        </div>
    </div>
    <x-form.script/>
</x-layout>
