<div class="flex flex-col space-y-5">


    <div class="flex items-center justify-between w-full">
        <a href="{{ route('admin.stock.create') }}" wire:navigate
            class="px-3 py-2 text-sm font-semibold text-white transition bg-blue-500 rounded hover:bg-blue-600 duraion-300">
            Buat Roti
        </a>

        @if (session('deleteSuccess'))
            <div x-data="{ alertSuccess: true }" x-show="alertSuccess" x-init="setTimeout(() => alertSuccess = false, 3000)"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                class="relative w-[24rem] rounded border border-transparent bg-green-500 px-3 py-2 flex justify-between items-center text-white">
                <div class="flex items-center text-white">
                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <h5 class="text-sm font-semibold">{{ session('deleteSuccess') }}</h5>
                </div>
                <button @click="alertSuccess = false" class="text-gray-600 ">
                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif
        @if (session('stockUpdated'))
            <div x-data="{ alertSuccess: true }" x-show="alertSuccess" x-init="setTimeout(() => alertSuccess = false, 3000)"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                class="relative w-[24rem] rounded border border-transparent bg-green-500 px-3 py-2 flex justify-between items-center text-white">
                <div class="flex items-center text-white">
                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <h5 class="text-sm font-semibold">{{ session('stockUpdated') }}</h5>
                </div>
                <button @click="alertSuccess = false" class="text-gray-600 ">
                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif


    </div>




    <div class="overflow-x-auto bg-white rounded shadow">
        <div class="inline-block min-w-full">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-neutral-200">
                    <thead>
                        <tr class="text-neutral-500">
                            <th class="px-5 pt-3 pb-2 text-xs font-medium text-left uppercase">ID</th>
                            <th class="px-5 pt-3 pb-2 text-xs font-medium text-left uppercase">Nama Roti</th>
                            <th class="px-5 pt-3 pb-2 text-xs font-medium text-left uppercase">Jumlah Stok</th>

                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200">
                        @forelse ($breads as $bread)
                            <tr class="text-neutral-800">
                                <td class="px-5 py-4 text-sm font-medium text-neutral-500 whitespace-nowrap">
                                    {{ $bread->id }}</td>
                                <td class="px-5 py-4 text-sm font-semibold capitalize whitespace-nowrap">
                                    {{ $bread->name }}</td>
                                <td class="px-5 py-4 text-sm font-semibold whitespace-nowrap">
                                    {{ $bread->stocks->count() }}
                                </td>
                                <td class="px-5 py-4 text-xs font-semibold whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        {{-- DETAIL --}}
                                        <a href="{{ route('admin.bread.detail', $bread->id) }}" wire:navigate
                                            class="flex items-center text-xs hover:text-blue-500 hover:underline hover:underline-offset-2 hover:decoration-1">
                                            Lihat Stok
                                        </a>
                                        {{-- DELETE MODAL --}}
                                        <div x-data="{ deleteModal: false }" @keydown.escape.window="deleteModal = false"
                                            class="relative z-50 w-auto h-auto">
                                            <button @click="deleteModal=true"
                                                class="flex items-center text-xs hover:text-red-500 hover:underline hover:underline-offset-2 hover:decoration-1">
                                                Hapus Roti
                                            </button>
                                            <template x-teleport="body">
                                                <div x-show="deleteModal"
                                                    class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                    x-cloak>
                                                    <div x-show="deleteModal" x-transition:enter="ease-out duration-300"
                                                        x-transition:enter-start="opacity-0"
                                                        x-transition:enter-end="opacity-100"
                                                        x-transition:leave="ease-in duration-300"
                                                        x-transition:leave-start="opacity-100"
                                                        x-transition:leave-end="opacity-0" @click="deleteModal=false"
                                                        class="absolute inset-0 w-full h-full bg-black bg-opacity-40">
                                                    </div>
                                                    <div x-show="deleteModal" x-trap.inert.noscroll="deleteModal"
                                                        x-transition:enter="ease-out duration-300"
                                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave="ease-in duration-200"
                                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                                                        <div class="flex items-center justify-between ">

                                                            <h3 class="block text-sm font-semibold">Hapus Roti
                                                            </h3>

                                                            <button @click="deleteModal=false"
                                                                class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                                <svg class="w-5 h-5"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div class="py-5">
                                                            <h1 class="text-lg font-semibold">
                                                                Kamu akan menghapus data
                                                            </h1>
                                                            <span
                                                                class="text-2xl font-bold underline">{{ $bread->name }}
                                                            </span>
                                                        </div>

                                                        <div class="flex items-center justify-end gap-x-3">
                                                            <x-button @click="deleteModal=false"
                                                                class="max-w-sm mt-3 bg-white text-slate-600 hover:bg-slate-200 hover:shadow-none"
                                                                label="Tidak" />
                                                            <form
                                                                action="{{ route('admin.bread.delete', $bread->id) }}"
                                                                method="post" class="mb-0">
                                                                @method('delete')
                                                                @csrf
                                                                <x-button
                                                                    class="max-w-sm mt-3 bg-red-500 hover:bg-red-600"
                                                                    label="Hapus Permanen" />
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </template>

                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-5 font-semibold text-center text-red-500">
                                    Data Belum Ada
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
