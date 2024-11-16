<div x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0 -translate-y-6"
    x-transition:enter-end="opacity-100 " x-transition:leave="transition  duration-300"
    x-transition:leave-start="opacity-100 " x-transition:leave-end="opacity-0 -translate-y-6"
    {{ $attributes->merge([
        'class' => 'absolute left-0 right-0 z-50 w-full overflow-hidden bg-white shadow top-14',
    ]) }}>
    {{ $slot }}
</div>
