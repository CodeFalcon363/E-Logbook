<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Records Manager') }}
        </h2>
    </x-slot>

    <livewire:records.create />
</x-app-layout>