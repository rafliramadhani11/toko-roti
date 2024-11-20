@props([
    'label' => null,
])

<button
    {{ $attributes->merge([
        'class' => 'px-5 py-1 font-semibold  transition duration-300 rounded hover:shadow-lg ',
    ]) }}>
    {{ $label ?? $slot }}
</button>
