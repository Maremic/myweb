@if (session()->has('success'))
    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class=" container fixed-top bg-warning text-dark col-6 items rounded p-3 mt-1"
    >
        <article id="flash">{{ session('success') }}</article>
    </div>
@endif
