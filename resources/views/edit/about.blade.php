<x-layout>
        <form method="POST" action="{{ route('abouts.update', $about->id) }}">
            @csrf
            @method('PATCH')

            <x-form.input name="sctitle" :value="old('sctitle', $about->sctitle)" required />

            <x-form.textarea name="section" required>{{ old('section', $about->section) }}</x-form.textarea>

            <x-form.button>Update</x-form.button>
        </form>
</x-layout>
