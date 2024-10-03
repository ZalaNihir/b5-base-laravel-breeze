@props(['active'])

@php
$classes = ($active ?? false)
            ? 'list-group-item active text-white bg-primary'
            : 'list-group-item text-dark hover:bg-light';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
