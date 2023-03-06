@props(['brandName'])

<aside class="x-sidebar">
    <div class="x-sidebar-container">
        <a href="{{ route('dashboard') }}" class="x-sidebar-brand-link">
            {{ $brandName }}
        </a>

        <x-sidebar.menu name="{{ __('General') }}">
            {{-- Route: Dashboard --}}
            <x-sidebar.menu-item route="{{ route('dashboard') }}" text="{{ __('Dashboard') }}">
                <x-icons.dashboard class="w-5 h-5" />
            </x-sidebar.menu-item>

            {{-- Route: Dashboard --}}
            <x-sidebar.menu-item route="{{ route('dashboard') }}" text="{{ __('Dashboard') }}">
                <x-icons.dashboard class="w-5 h-5" />
            </x-sidebar.menu-item>
        </x-sidebar.menu>

        <x-sidebar.menu name="{{ __('Dropdown') }}">
            {{-- Route: Dashboard --}}
            <x-sidebar.dropdown title="{{ __('Dropdown Button') }}">
                <x-slot name="icon">
                    <x-icons.dashboard class="w-5 h-5" />
                </x-slot>
                <x-sidebar.dropdown-item route="{{ route('dashboard') }}" text="{{ __('Dropdown Item') }}" />
            </x-sidebar.dropdown>
        </x-sidebar.menu>

    </div>
</aside>
