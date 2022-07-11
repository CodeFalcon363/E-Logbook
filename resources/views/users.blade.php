<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('User Account Manager') }}
        </h2>
    </x-slot>

    <livewire:users />
</x-app-layout>