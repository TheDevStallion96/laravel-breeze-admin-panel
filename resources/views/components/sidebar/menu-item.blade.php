@props(['route', 'active', 'text'])

@php
    $classes = $active ?? false ? 'x-sidebar-menu-item-link' : 'x-sidebar-menu-item-link-active';
@endphp

<li class="x-sidebar-menu-item">
    {{-- Loading Menu Item Child Component - <x-sidebar.link :route="#" :active="request()->routeIs('dashboard')">{{ $slot }}</x-sidebar.link> --}}
    <a href="{{ $route }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        <span class="block ml-4">{{ $text }}</span>
    </a>
</li>
