<x-layout>
        <form method="POST" action="{{ route('category.update', $category->id) }}">
            @csrf
            @method('PATCH')

            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="row d-flex justify-content-center m-auto">
                        <h1> Edit category</h1>
                    </div>
                    <div class="row d-flex justify-content-center m-auto w-100 pt-5">
                        <x-form.input name="title" :value="old('title', $category->title)" required />
                    </div>
                    <div class=" d-flex justify-content-center pt-5">
                        <button type="submit" formnovalidate="formnovalidate" class="btn btn-warning">Update</button>
                    </div>
                        <x-form.error name="title"/>
                    </form>
                </div>
            </div>
        </form>
        <x-form.script/>
</x-layout>
