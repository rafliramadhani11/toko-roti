<x-app-layout>

    <x-slot name="header">
        <x-icons.box />
        Stok Barang
    </x-slot>

    <livewire:bread-stock-table :breads="$breads" />

</x-app-layout>
