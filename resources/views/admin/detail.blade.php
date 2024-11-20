 <x-app-layout>
     <x-slot name="header">
         <x-icons.box />
         <x-link href="{{ route('admin.app') }}" wire:navigate label="Stok Barang" />
         <span class="mx-3 font-semibold">/</span>
         Detail Stok
     </x-slot>


     @if (session('breadUpdated'))
         <div class="flex items-center justify-start mb-5">
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

                     <h5 class="text-sm font-semibold">{{ session('breadUpdated') }}</h5>
                 </div>
                 <button @click="alertSuccess = false" class="text-gray-600 ">
                     <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>
         </div>
     @endif
     @if (session('stockCreated'))
         <div class="flex items-center justify-end mb-5">
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

                     <h5 class="text-sm font-semibold">{{ session('stockCreated') }}</h5>
                 </div>
                 <button @click="alertSuccess = false" class="text-gray-600 ">
                     <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>
         </div>
     @endif

     <div class="grid-cols-2 gap-x-5 lg:grid">
         <div class="px-5 py-3 lg:bg-white lg:rounded-lg lg:shadow">
             <h1 class="leading-none md:my-3">
                 <span class="block text-xl font-semibold text-slate-900">Ubah Nama {{ $bread->name }}</span>
                 <span class="text-sm text-neutral-500">
                     Ubah data dengan data yang benar dan presisi
                 </span>
             </h1>

             <form action="{{ route('admin.bread.updated', $bread->id) }}" method="post" class="space-y-5 md:mt-0 ">
                 @method('patch')
                 @csrf


                 <div>
                     <x-label for="name" label="Nama Roti" />
                     <x-input id="name" name="name" type="text" value="{{ $bread->name }}" />
                 </div>

                 <div class="flex justify-end">
                     <button type="submit"
                         class="max-w-sm px-3 py-2 text-sm font-semibold text-white transition duration-300 bg-green-500 rounded shadow hover:bg-green-600">
                         Edit Roti
                     </button>
                 </div>

             </form>
         </div>

         <div class="px-5 py-3 lg:bg-white lg:rounded-lg lg:shadow">
             <h1 class="leading-none md:my-3">
                 <span class="block text-xl font-semibold text-slate-900">Buat stok</span>
                 <span class="text-sm text-neutral-500">
                     Isi data stok dengan sesuai
                 </span>
             </h1>

             <form action="{{ route('admin.stock.created', $bread->id) }}" method="post"
                 class="space-y-5 md:mt-0 md:w-full">
                 @csrf

                 <div class="gap-5 space-y-3 ">
                     <div class="col-span-2">
                         <x-label for="quantity" label="Jumlah Roti" />
                         <x-input id="quantity" name="quantity" type="number" />
                     </div>
                     <div>
                         <x-label for="created_at" label="Dibuat pada" />
                         <x-input id="created_at" name="created_at" type="datetime-local" />
                         <span class="mt-5 ml-2 text-xs text-neutral-500">AM : 00 - 12 , PM : 12 - 00</span>
                     </div>
                 </div>

                 <div class="flex justify-end">
                     <button type="submit"
                         class="max-w-sm px-3 py-2 text-sm font-semibold text-white transition duration-300 bg-green-500 rounded shadow hover:bg-green-600">
                         Buat Stock
                     </button>
                 </div>

             </form>
         </div>
     </div>

     @if (session('stockDeleted'))
         <div class="flex items-center justify-end my-5">
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

                     <h5 class="text-sm font-semibold">{{ session('stockDeleted') }}</h5>
                 </div>
                 <button @click="alertSuccess = false" class="text-gray-600 ">
                     <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>
         </div>
     @endif
     @if (session('stockUpdated'))
         <div class="flex items-center justify-end my-5">
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
         </div>
     @endif
     <div class="mt-5 overflow-x-auto lg:bg-white lg:shadow">
         <div class="inline-block min-w-full">
             <div class="overflow-hidden">
                 <table class="min-w-full divide-y divide-neutral-200">
                     <thead>
                         <tr class="text-neutral-500">

                             <th class="px-5 pt-3 pb-2 text-xs font-medium text-left uppercase">Jumlah Stok</th>
                             <th class="px-5 pt-3 pb-2 text-xs font-medium text-left uppercase">Dibuat pada</th>
                             <th class="px-5 pt-3 pb-2 text-xs font-medium text-left uppercase">Diubah pada</th>
                         </tr>
                     </thead>
                     <tbody class="divide-y divide-neutral-200">
                         @forelse ($bread->stocks as $stock)
                             <tr class="text-neutral-800">

                                 <td class="px-5 py-2 text-sm font-semibold text-slate-900 whitespace-nowrap">
                                     {{ $stock->quantity }}
                                 </td>
                                 <td class="px-5 py-2 text-sm font-medium text-neutral-500 whitespace-nowrap">
                                     <span class="block text-xs">
                                         {{ $stock->created_at->translatedFormat('l, j F Y') }}
                                     </span>
                                     <span class="text-xs ">{{ $stock->created_at->translatedFormat('H:i') }}</span>
                                 </td>
                                 <td class="px-5 py-2 text-sm font-medium text-neutral-500 whitespace-nowrap">
                                     <span class="block text-xs">
                                         @if ($stock->updated_at)
                                             <span class="block text-xs">
                                                 {{ $stock->updated_at->translatedFormat('l, j F Y') }}
                                             </span>
                                             <span class="text-xs">
                                                 {{ $stock->updated_at->translatedFormat('H:i') }}
                                             </span>
                                         @else
                                             <span class="block text-xs">-</span>
                                         @endif
                                 </td>
                                 <td class="px-5 py-2 text-sm font-medium text-neutral-500 whitespace-nowrap">
                                     <div class="flex items-center gap-x-2">

                                         {{-- EDIT MODAL --}}
                                         <div x-data="{ editModal: false }" @keydown.escape.window="editModal = false"
                                             class="relative z-50 w-auto h-auto">
                                             <button @click="editModal=true"
                                                 class="flex items-center text-xs hover:text-green-500 text-slate-900 hover:underline hover:underline-offset-2 hover:decoration-1">
                                                 Edit
                                             </button>
                                             <template x-teleport="body">
                                                 <div x-show="editModal"
                                                     class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                     x-cloak>
                                                     <div x-show="editModal"
                                                         x-transition:enter="ease-out duration-300"
                                                         x-transition:enter-start="opacity-0"
                                                         x-transition:enter-end="opacity-100"
                                                         x-transition:leave="ease-in duration-300"
                                                         x-transition:leave-start="opacity-100"
                                                         x-transition:leave-end="opacity-0" @click="editModal=false"
                                                         class="absolute inset-0 w-full h-full bg-black bg-opacity-40">
                                                     </div>
                                                     <div x-show="editModal" x-trap.inert.noscroll="editModal"
                                                         x-transition:enter="ease-out duration-300"
                                                         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                         x-transition:leave="ease-in duration-200"
                                                         x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                         class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                                                         <div class="flex items-center justify-between ">

                                                             <h3 class="block text-sm font-semibold">Edit Stok
                                                             </h3>

                                                             <button @click="editModal=false"
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

                                                         <form action="{{ route('admin.stock.updated', $stock->id) }}"
                                                             method='post' class="mb-0">
                                                             @csrf
                                                             @method('patch')
                                                             <div class="py-5">
                                                                 <div>
                                                                     <x-label for="quantity" label="Jumlah Stok" />
                                                                     <x-input id="quantity" name="quantity"
                                                                         type="number" />
                                                                 </div>
                                                             </div>

                                                             <div class="flex items-center justify-end gap-x-3">
                                                                 <x-button @click="editModal=false"
                                                                     class="max-w-sm mt-3 text-green-700 bg-white hover:bg-green-200 hover:shadow-none"
                                                                     label="Edit" />

                                                             </div>
                                                         </form>

                                                     </div>
                                                 </div>
                                             </template>

                                         </div>

                                         {{-- DELETE MODAL --}}
                                         <div x-data="{ deleteModal: false }" @keydown.escape.window="deleteModal = false"
                                             class="relative z-50 w-auto h-auto">
                                             <button @click="deleteModal=true"
                                                 class="flex items-center text-xs hover:text-red-500 text-slate-900 hover:underline hover:underline-offset-2 hover:decoration-1">
                                                 Hapus
                                             </button>
                                             <template x-teleport="body">
                                                 <div x-show="deleteModal"
                                                     class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                     x-cloak>
                                                     <div x-show="deleteModal"
                                                         x-transition:enter="ease-out duration-300"
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

                                                             <h3 class="block text-sm font-semibold">Hapus Stok
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
                                                             <h1 class="block text-2xl font-bold">
                                                                 {{ $stock->created_at->translatedFormat('j F Y') }}
                                                             </h1>
                                                             <span class="text-xs text-neutral-500">Data yang
                                                                 dihapus tidak bisa dikembalikan</span>
                                                         </div>

                                                         <div class="flex items-center justify-end gap-x-3">
                                                             <x-button @click="deleteModal=false"
                                                                 class="max-w-sm mt-3 bg-white text-neutral-600 hover:bg-gray-200 hover:shadow-none"
                                                                 label="Tidak" />
                                                             <form
                                                                 action="{{ route('admin.stock.delete', $stock->id) }}"
                                                                 method="post" class="mb-0">

                                                                 @csrf
                                                                 <x-button type="submit"
                                                                     class="max-w-sm mt-3 text-white bg-red-500 hover:bg-red-600"
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


 </x-app-layout>
