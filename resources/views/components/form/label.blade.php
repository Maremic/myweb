@props(['name'])

<label class="p-2"
       for="{{ $name }}"
>
    {{ ucwords($name) }}
</label>
