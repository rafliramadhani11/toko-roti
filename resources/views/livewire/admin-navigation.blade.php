<nav x-data="{ open: false }" class="relative w-full bg-white rounded shadow">
    <div class="flex items-center justify-between px-3 py-3 md:px-8 lg:max-w-7xl lg:mx-auto">
        {{-- APP NAME --}}
        <div>
            <span class="text-2xl font-bold">Delicia Bakery</span>
        </div>

        {{-- LINK --}}
        <div x-data="{ dropdown: false }" class="relative hidden md:flex gap-x-3">
            <div class="pr-3 border-r-2 border-slate-300">
                <x-link href="#"
                    class="{{ Route::is('admin.app') ? 'underline underline-offset-8 decoration-2' : '' }}"
                    label="Stok Barang" />
            </div>
            <button @click="dropdown =! dropdown" class="flex items-center text-sm">
                {{ $user->email }}
                <x-icons.down-arrow class="translate-y-0.5 ml-1" />
            </button>
            <div x-show="dropdown" @click.outside="dropdown = false" x-cloak
                class="absolute bg-white right-0 w-[12rem] rounded shadow top-11 z-50 py-1">
                <span class="px-3 py-1 text-xs">{{ $user->name }}</span>
                <div class="w-full h-[1px] my-1 bg-slate-200 "></div>
                <form action="" method="post" class="my-0">
                    @csrf
                    <button
                        class="flex items-center w-full px-3 py-1 mb-0 text-sm font-semibold transition duration-300 hover:text-white hover:bg-red-500 text-start">
                        <x-icons.sign-out class="size-[16px]" />
                        Sign Out
                    </button>
                </form>
            </div>
        </div>

        {{-- MOBILE DROPDOWN --}}
        <div @click="open =! open" class="tham tham-e-squeeze tham-w-6 md:hidden">
            <div class="tham-box">
                <div class="tham-inner" />
            </div>
        </div>

    </div>

    {{-- MOBILE MENU --}}
    <x-mobile-dropdown x-show="open" x-cloak>

        <x-mobile-link href="{{ route('guest.index') }}"
            class="{{ Route::is('guest.index') ? 'bg-slate-200' : '' }} flex items-center">
            <x-icons.box />
            Stok Barang
        </x-mobile-link>
        <div class="w-full h-[1px] bg-gray-200 mt-1 mb-3"></div>
        <div class="flex items-center px-3 mb-3 gap-x-3">
            <div
                class="inline-flex items-center justify-center w-8 h-8 text-xs font-bold bg-gray-200 rounded-full text-slate-900">
                A
            </div>
            <div>
                <span class="block text-sm font-semibold">Admin</span>
                <span class="text-xs ">admin@mail.com</span>
            </div>
        </div>
        <button
            class="flex items-center w-full px-3 py-2 mb-1 font-semibold bg-white rounded-none hover:text-white text-slate-900 hover:bg-red-500">
            <x-icons.sign-out />
            Sign Out
        </button>


    </x-mobile-dropdown>

</nav>
