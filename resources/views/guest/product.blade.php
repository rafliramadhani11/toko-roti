<x-guest-layout>
    <x-slot name="guestNav">
        <livewire:guest-navigation />
    </x-slot>

    <div class="px-4 py-8 mx-auto sm:px-6 max-w-7xl lg:px-6 xl:px-16">
        <h2 class="text-2xl font-semibold">Trending Product</h2>

        <div class="grid grid-cols-1 mt-5 gap-x-10 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-10">

            <a href="#" class="group">
                <div
                    class="w-full overflow-hidden bg-gray-200 rounded-lg aspect-h-1 aspect-w-1 xl:aspect-h-8 xl:aspect-w-7">
                    <img loading='lazy' src="{{ asset('img/signature_reguler.png') }}"
                        class="object-cover object-center size-full group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Signature Reguler</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Rp. 22.000</p>
            </a>
            <a href="#" class="group">
                <div
                    class="w-full overflow-hidden bg-gray-200 rounded-lg aspect-h-1 aspect-w-1 xl:aspect-h-8 xl:aspect-w-7">
                    <img loading='lazy' src="{{ asset('img/signature_large.png') }}"
                        class="object-cover object-center size-full group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Signature Large</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Rp. 26.000</p>
            </a>
            <a href="#" class="group">
                <div
                    class="w-full overflow-hidden bg-gray-200 rounded-lg aspect-h-1 aspect-w-1 xl:aspect-h-8 xl:aspect-w-7">
                    <img loading='lazy' src="{{ asset('img/wheat_reguler.png') }}"
                        class="object-cover object-center size-full group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Wheat Reguler</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Rp. 24.000</p>
            </a>
            <a href="#" class="group">
                <div
                    class="w-full overflow-hidden bg-gray-200 rounded-lg aspect-h-1 aspect-w-1 xl:aspect-h-8 xl:aspect-w-7">
                    <img loading='lazy' src="{{ asset('img/wheat_large.png') }}"
                        class="object-cover object-center size-full group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Wheat Large</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Rp. 28.000</p>
            </a>
        </div>
    </div>
    
    <x-slot name="guestFooter">
        <livewire:footer />
    </x-slot>
</x-guest-layout>
