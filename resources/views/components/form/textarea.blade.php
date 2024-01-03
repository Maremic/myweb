@props(['name'])

<x-form.label :name="$name" />

<textarea
    class="textarea"
    placeholder="Put some text here."
    name="{{ $name }}"
    id="{{ $name }}"
    required
    {{ $attributes }}
>{{ $slot ?? old($name) }}</textarea>

<x-form.error :name="$name" />

