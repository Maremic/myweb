<x-layout>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="/sections">
                @csrf
            <div class="row d-flex justify-content-center m-auto">
                <h1> Create section</h1>
            </div>
            <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                <x-form.input name="title" required />
            </div>
            <div class="row textarea d-flex justify-content-center m-auto" style="color: black;">
                <x-form.textarea name="text" required/>
            </div>
                <input type="hidden" value="{{$categoryId}}" name="category_id">
            <x-form.submit/>
                <x-form.error name="title"/>
                <x-form.error name="text"/>
            </form>
        </div>
    </div>
    <x-form.script/>
</x-layout>
