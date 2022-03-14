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
            <x-form.submit/>
                <x-form.error name="sctitle"/>
                <x-form.error name="section"/>
            </form>
        </div>
    </div>
    <x-form.script/>
</x-layout>
