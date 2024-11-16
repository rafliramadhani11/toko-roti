<x-guest-layout>

    <x-slot name="guestNav">
        <livewire:guest-navigation />
    </x-slot>

    {{-- HEROES --}}
    <section class="px-2 py-20 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div
                        class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1
                            class="text-4xl font-extrabold tracking-tight text-gray-900 lg:leading-snug xl:leading-snug sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">Nikmati Roti Segar </span>
                            <span class="block text-gray-900 bg-yellow-300 ">Setiap Hari</span>
                        </h1>
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Kami menghadirkan
                            roti dengan kualitas terbaik, dipanggang sempurna setiap hari menggunakan bahan alami
                            pilihan. Rasakan kelezatan sejati di setiap gigitan.
                        </p>

                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl"
                        data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <img loading='lazy' src="{{ asset('img/bread.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTENT --}}
    <section class="w-full pt-7 pb-7 md:pt-20 md:pb-24">

        <section>
            <div class="px-8 py-2 mx-auto my-6 bg-yellow-300 max-w-7xl sm:py-5 sm:px-6 lg:px-8 sm:text-center">
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    SIGNATURE
                </p>
            </div>
        </section>

        {{-- SIGNATURE REGULER --}}
        <div
            class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">

            <!-- Image -->
            <div
                class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                <img loading="lazy" src="{{ asset('img/signature_reguler.png') }}"
                    class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 " />
            </div>

            <!-- Content -->
            <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    SIGNATURE REGULER
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                    Roti khas dalam ukuran yang lebih kecil, ideal untuk camilan sehari-hari. Nikmati rasa khas kami
                    dalam setiap gigitan.
                </p>

            </div>
            <!-- End  Content -->
        </div>
        {{-- SIGNATURE LARGE --}}
        <div
            class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 md:flex-row max-w-7xl lg:px-16">

            <!-- Content -->
            <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    SIGNATURE LARGE
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                    Roti besar khas kami yang dipanggang sempurna untuk menghasilkan tekstur empuk di dalam dan renyah
                    di luar. Cocok untuk dinikmati bersama keluarga atau acara spesial.
                </p>

            </div>
            <!-- End  Content -->

            <!-- Image -->
            <div
                class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                <img loading="lazy" src="{{ asset('img/signature_large.png') }}"
                    class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32" />
            </div>

        </div>

        <section class="pt-20">
            <div class="px-8 py-2 mx-auto my-6 bg-yellow-300 max-w-7xl sm:py-5 sm:px-6 lg:px-8 sm:text-center ">

                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    WHEAT</p>

            </div>
        </section>

        {{-- WHEAT REGULER --}}
        <div
            class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">

            <!-- Image -->
            <div
                class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                <img loading='lazy' src="{{ asset('img/wheat_reguler.png') }}"
                    class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 " />
            </div>

            <!-- Content -->
            <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    WHEAT REGULER
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                    Roti gandum dalam ukuran reguler, pas untuk yang mencari pilihan sehat dengan porsi lebih kecil.
                </p>
            </div>
            <!-- End  Content -->
        </div>
        <div
            class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 md:flex-row max-w-7xl lg:px-16">

            <!-- Content -->
            <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    WHEAT LARGE
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                    Roti gandum besar yang kaya akan serat, baik untuk kesehatan dan memiliki rasa yang lembut namun
                    mengenyangkan.
                </p>

            </div>
            <!-- End  Content -->

            <!-- Image -->
            <div
                class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                <img loading='lazy' src="{{ asset('img/wheat_large.png') }}" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32" />
            </div>
        </div>
    </section>

    {{-- TESTIMONIAL --}}
    <section class="flex items-center justify-center py-20 min-w-screen">
        <div class="px-16">
            <div class="container flex flex-col items-start mx-auto lg:items-center">

                <h2
                    class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block"
                        viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                        </path>
                    </svg>
                    Lihat apa yang mereka katakan
                </h2>
                <div class="block w-full h-0.5 max-w-lg mt-6 bg-yellow-100 rounded-full">
                </div>

                <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                    <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img loading='lazy'
                                    src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1700&q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">John Doe</h4>
                                <p class="text-gray-600">Pecinta Hidup Sehat</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Setiap pagi, keluarga kami selalu menantikan
                            roti dari bakery ini. Teksturnya lembut, rasanya autentik, dan selalu segar. Saya sangat
                            merekomendasikan untuk siapa pun yang mencari roti berkualitas!"
                        </blockquote>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img loading='lazy'
                                    src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2547&q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Jane Doe</h4>
                                <p class="text-gray-600">Ibu Rumah Tangga</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Roti gandum di sini luar biasa! Rasanya enak,
                            mengenyangkan, dan membuat saya tetap merasa sehat. Senang sekali menemukan bakery yang
                            peduli dengan bahan alami dan kualitas terbaik."</blockquote>
                    </div>
                    <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img loading='lazy'
                                    src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1256&q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">John Smith</h4>
                                <p class="text-gray-600">Pemilik Kafe</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Sebagai pemilik kafe, saya selalu mencari roti
                            yang tidak hanya lezat tapi juga memiliki kualitas konsisten. Bakery ini menjadi solusi
                            sempurna untuk kebutuhan usaha saya. Pelanggan saya juga sangat menyukainya!"</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <div class="w-full p-5">
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

    <x-slot name="guestFooter">
        <livewire:footer />
    </x-slot>

</x-guest-layout>
