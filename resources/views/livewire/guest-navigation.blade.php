<nav x-data="{ open: false }" class="relative px-3 py-5 bg-white rounded shadow md:px-5">

    <div class="flex items-center justify-between md:max-w-6xl md:mx-auto">

        <span class="text-2xl font-extrabold leading-none">Delicia Bakery</span>

        <div class="items-center justify-between hidden md:flex">
            <div class="flex items-center justify-between pr-3 border-r-2 border-slate-950 gap-x-5">
                <x-link href="{{ route('guest.index') }}"
                    class="{{ Route::is('guest.index') ? 'underline-offset-8 decoration-2 underline' : '' }}"
                    label="Home" />
                <x-link href="{{ route('guest.product') }}"
                    class="{{ Route::is('guest.product') ? 'underline-offset-8 decoration-2 underline' : '' }}"
                    label="Product" />
                <x-link href="{{ route('guest.tentangKami') }}"
                    class="{{ Route::is('guest.tentangKami') ? 'underline-offset-8 decoration-2 underline' : '' }}"
                    label="About" />
            </div>
            <div class="relative pl-3" x-data="{ dropdown: false }">
                @auth
                    <button @click="dropdown =! dropdown" class="flex items-center text-sm">
                        {{ $user->email }}
                        <x-icons.down-arrow class="translate-y-0.5 ml-1" />
                    </button>
                    <div x-show="dropdown" @click.outside="dropdown = false" x-cloak
                        class="absolute bg-white right-0 w-[12rem] rounded shadow-lg top-10 z-50 py-1">
                        <span class="px-3 py-1 text-xs">{{ $user->name }}</span>
                        <div class="w-full h-[1px] my-1 bg-slate-200 "></div>
                        <a href="{{ route('admin.app') }}" wire:navigate
                            class="flex items-center px-3 py-1 overflow-hidden text-sm font-semibold hover:bg-slate-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-[16px] mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                            </svg>
                            Dashboard
                        </a>
                        <form action="{{ route('admin.logout') }}" method="post" class="my-0">
                            @csrf
                            <button
                                class="flex items-center w-full px-3 py-1 mb-0 text-sm font-semibold transition duration-300 hover:text-white hover:bg-red-500 text-start">
                                <x-icons.sign-out class="size-[16px]" />
                                Sign Out
                            </button>
                        </form>
                    </div>
                @else
                    <x-link href="{{ route('guest.login') }}"
                        class="px-5 py-2 text-white rounded bg-slate-950 hover:underline-offset-0 hover:decoration-0 hover:no-underline"
                        label="Login" />
                @endauth

            </div>
        </div>


        <div @click="open =! open" class="tham tham-e-squeeze tham-w-6 md:hidden">
            <div class="tham-box">
                <div class="tham-inner" />
            </div>
        </div>

    </div>



    <x-mobile-dropdown x-show="open" @click.outside="open = false" x-cloak>
        <x-mobile-link href="{{ route('guest.index') }}" class="{{ Route::is('guest.index') ? 'bg-slate-200' : '' }}"
            label="Home" />
        <x-mobile-link href="{{ route('guest.product') }}"
            class="{{ Route::is('guest.product') ? 'bg-slate-200' : '' }}" label="Product" />
        <x-mobile-link href="{{ route('guest.tentangKami') }}"
            class="{{ Route::is('guest.tentangKami') ? 'bg-slate-200' : '' }}" label="About" />
        <hr class="my-2">
        @auth
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
            <x-mobile-link href="{{ route('admin.app') }}" wire:navigate label="Dashboard"
                class="transition duration-300 hover:text-white hover:bg-slate-950" />
            <form action="{{ route('admin.logout') }}" method="post">
                @csrf
                <button
                    class="flex items-center w-full px-3 py-2 font-semibold transition duration-300 bg-white rounded-none hover:text-white text-slate-900 hover:bg-red-500">
                    Sign Out
                </button>
            </form>
        @else
            <x-mobile-link href="{{ route('guest.login') }}" label="Login"
                class="mb-2 transition duration-300 hover:text-white hover:bg-slate-950" />
        @endauth
    </x-mobile-dropdown>




</nav>
