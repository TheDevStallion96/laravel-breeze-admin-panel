@props(['name'])

<ul class="x-sidebar-menu">
    <li class="x-sidebar-menu-item">
        <span class="x-sidebar-menu-name">
            {{ $name }}
        </span>
    </li>
    {{ $slot }}
</ul>
