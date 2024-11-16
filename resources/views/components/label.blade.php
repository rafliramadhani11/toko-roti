@props([
    'label' => null,
])

<label {{ $attributes->merge([
    'class' => 'block font-medium text-gray-900 text-sm',
]) }}>
    {{ $label ?? $slot }}
</label>
