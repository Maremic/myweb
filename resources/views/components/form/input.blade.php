@props(['name'])

<div class="w-20">
    <x-form.label name="{{ $name }}"/>
</div>
    <input class="text-center border w-50"
           placeholder="Put some text here."
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>

