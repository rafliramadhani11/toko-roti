<x-app-layout>
    <x-slot name="header">
        <x-icons.box />
        <x-link href="{{ route('admin.app') }}" wire:navigate label="Stok Barang" />
        <span class="mx-3 font-semibold">/</span>
        Buat Stok
    </x-slot>

    <div class="items-start justify-between px-5 py-3 md:flex lg:bg-white lg:rounded-lg lg:shadow">
        <h1 class="leading-none md:my-3">
            <span class="block text-xl font-semibold text-slate-900">Buat Stok Roti</span>
            <span class="text-sm text-neutral-500">Masukan data dengan baik dan benar</span>
        </h1>

        <form action="" method="post" class="mt-5 space-y-3 md:mt-0 md:w-1/2 ">
            @csrf
            <div>
                <x-label for="name" label="Nama Roti" />
                <x-input id="name" name="name" type="text" />
            </div>
            <div>
                <x-label for="quantity" label="Jumlah" />
                <x-input id="quantity" name="quantity" type="number" />
            </div>

            <button type="submit"
                class="max-w-sm px-3 py-2 text-sm font-semibold text-white transition duration-300 bg-blue-500 rounded shadow hover:bg-blue-600">
                Buat Baru
            </button>

        </form>
    </div>

</x-app-layout>