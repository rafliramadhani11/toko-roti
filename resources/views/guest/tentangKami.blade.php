<x-guest-layout>
    <x-slot name="guestNav">
        <livewire:guest-navigation />
    </x-slot>

    <section class="relative py-24">
        <div class="w-full max-w-6xl px-4 mx-auto md:px-5 lg:px-5">
            <div class="grid items-center justify-start w-full grid-cols-1 gap-12 lg:grid-cols-2">
                <div
                    class="grid items-start justify-center order-last w-full grid-cols-1 gap-6 sm:grid-cols-2 lg:order-first">
                    <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                        <img class="object-cover rounded-xl" loading='lazy' src="{{ asset('img/croissant.jpg') }}" />
                    </div>
                    <img class="object-cover ml-auto sm:ml-0 rounded-xl" loading='lazy'
                        src="{{ asset('img/croissant2.jpg') }}" />
                </div>
                <div class="inline-flex flex-col items-center justify-center w-full gap-10 lg:items-start">
                    <div class="flex flex-col items-start justify-center w-full gap-8">
                        <div class="flex flex-col items-center justify-start w-full gap-3 lg:items-start">
                            <h2
                                class="text-4xl font-bold leading-normal text-center text-gray-900 font-manrope lg:text-start">
                                Mengenal Lebih Dekat Kami</h2>
                            <p class="text-base font-normal leading-relaxed text-center text-gray-500 lg:text-start">
                                Kami adalah bakery yang berdedikasi untuk menghadirkan roti terbaik. Dengan mengutamakan
                                kualitas bahan dan proses tradisional, kami ingin menjadi
                                bagian dari momen spesial Anda setiap hari.</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="px-2 py-32 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg md:space-y-4 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1
                            class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">Komitmen Kami untuk Anda</span>

                        </h1>
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Misi kami adalah memberikan roti segar, lezat, dan sehat yang disukai semua kalangan. Dengan
                            visi menjadi bakery pilihan utama, kami terus berinovasi untuk memenuhi kebutuhan pelanggan.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl"
                        data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <img loading='lazy' src="{{ asset('img/bread2.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-6xl grid-cols-3 px-3 mx-auto mt-24 md:grid">
        <h1 class="mb-5 text-xl font-bold">
            Dimulai dari Sebuah <br> Impian

        </h1>
        <span class="col-span-2">
            Perjalanan kami dimulai dari kecintaan terhadap seni membuat roti. Dari dapur kecil hingga menjadi toko roti
            yang dikenal luas, setiap langkah kami dipenuhi dengan semangat untuk menciptakan roti berkualitas.
        </span>
    </section>

    <section class="relative py-24 overflow-hidden">
        <span class="absolute top-0 right-0 flex flex-col items-end mt-0 -mr-16 opacity-60">
            <span
                class="container hidden w-screen h-32 max-w-xs mt-20 transform rounded-full rounded-r-none md:block md:max-w-xs lg:max-w-lg 2xl:max-w-3xl"></span>
        </span>

        <span class="absolute bottom-0 left-0"> </span>

        <div class="relative max-w-6xl px-3 mx-auto">
            <h2 class="relative max-w-lg mt-5 mb-10 text-4xl font-semibold leading-tight lg:text-3xl">Orang-Orang di
                Balik Kelezatan</h2>
            <div class="grid w-full grid-cols-2 gap-10 sm:grid-cols-3 lg:grid-cols-4">

                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50">
                        </div>
                        <img loading='lazy' class="relative z-20 w-full rounded-full"
                            src="{{ asset('img/chef7.jpg') }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Ron Jenson</h3>

                        </div>

                    </div>
                </div>

                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-pink-50">
                        </div>
                        <img loading='lazy' class="relative z-20 w-full rounded-full"
                            src="{{ asset('img/chef2.jpg') }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Pete Tompkins</h3>

                        </div>

                    </div>
                </div>

                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50">
                        </div>
                        <img loading='lazy' class="relative z-20 w-full rounded-full"
                            src="{{ asset('img/chef5.jpg') }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Kelly Richards</h3>

                        </div>

                    </div>
                </div>

                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-blue-50">
                        </div>
                        <img loading='lazy' class="relative z-20 w-full rounded-full"
                            src="{{ asset('img/chef6.jpg') }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Alexis Jordan</h3>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="w-full py-5">
            <div
                class="w-full bg-yellow-300/50 p-10 text-center rounded-lg min-h-[350px] flex flex-col items-center justify-center">

                <h3 class="w-full mt-3 text-4xl font-bold text-left text-gray-900 md:text-center">
                    Lihat berbagai macam produk kami disini
                </h3>
                <p class="max-w-xl mx-auto mt-2 text-base text-left text-gray-500 md:text-center">
                    Kamu dapat memilih beberapa roti sesuai selera kamu, dan pastinya kami menjaga rasa dan kualitasnya
                    dengan sangat tertata
                </p>
                <x-link href="{{ route('guest.product') }}" label="Lihat disini"
                    class="px-5 py-2 mt-2 text-white rounded bg-slate-900 hover:no-underline" />

            </div>
        </div>
    </section>
    <x-slot name="guestFooter">
        <livewire:footer />
    </x-slot>
</x-guest-layout>
