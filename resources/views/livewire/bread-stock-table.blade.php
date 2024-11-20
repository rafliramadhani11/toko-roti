<div class="flex flex-col space-y-5">




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
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    @endif
    @if (session('stockCreated'))
        <div x-data="{ alertSuccess: true }" x-show="alertSuccess" x-init="setTimeout(() => alertSuccess = false, 3000)"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
            class="relative w-[24rem] rounded border border-transparent bg-blue-500 px-3 py-2 flex justify-between items-center text-white">
            <div class="flex items-center text-white">
                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <h5 class="text-sm font-semibold">{{ session('stockCreated') }}</h5>
            </div>
            <button @click="alertSuccess = false" class="text-gray-600 ">
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    @endif






</div>
