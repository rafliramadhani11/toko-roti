@props([
    'label' => null,
])

<a
    {{ $attributes->merge([
        'class' => 'hover:underline hover:underline-offset-8 hover:decoration-2 font-semibold',
    ]) }}>
    {{ $label ?? $slot }}
</a>
