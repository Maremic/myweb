@props(['name'])


    <x-form.label name="{{ $name }}"/>

    <input class=""
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>

