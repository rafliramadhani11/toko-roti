@props([
    'label' => null,
])

<button
    {{ $attributes->merge([
        'class' => 'px-5 py-1 font-semibold text-white transition duration-300 rounded hover:shadow-lg bg-slate-900',
    ]) }}>
    {{ $label ?? $slot }}
</button>
