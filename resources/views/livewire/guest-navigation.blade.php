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
            <div class="pl-3">
                <x-link href="{{ route('guest.login') }}"
                    class="px-5 py-2 text-white rounded bg-slate-950 hover:underline-offset-0 hover:decoration-0 hover:no-underline"
                    label="Login" />
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
        <x-mobile-link href="{{ route('guest.login') }}" label="Login"
            class="mb-2 transition duration-300 hover:text-white hover:bg-slate-950" />
    </x-mobile-dropdown>




</nav>
