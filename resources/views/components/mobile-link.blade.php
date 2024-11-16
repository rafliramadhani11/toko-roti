@props([
    'label' => null,
])

<a
    {{ $attributes->merge([
        'class' => 'block px-3 py-2 overflow-hidden font-semibold hover:bg-slate-200',
    ]) }}>
    {{ $label ?? $slot }}
</a>
