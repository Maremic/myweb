@props(['name'])

@error($name)
    <p class="p-3 mb-2 bg-warning text-danger">{{ $message }}</p>
@enderror
