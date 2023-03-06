@props(['route', 'active', 'text'])

@php
    $classes = $active ?? false ? 'w-full text-gray-100 transition-colors duration-150' : 'w-full transition-colors duration-150 text-purple-500';
@endphp

<li class="px-2 py-1">
    <a href="{{ $route }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $text }}
    </a>
</li>
