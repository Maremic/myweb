<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/category">
                @csrf
            <div class="row d-flex justify-content-center m-auto">
                <h1> Create category</h1>
            </div>
            <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                <x-form.input name="title" required />
            </div>
            <x-form.submit/>
                <x-form.error name="title"/>
            </form>
        </div>
    </div>
    <x-form.script/>
</x-layout>
