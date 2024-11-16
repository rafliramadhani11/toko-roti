<x-app-layout>

    <div class="flex flex-col justify-center min-h-full px-6 py-12 lg:px-8 ">



        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md sm:bg-white sm:shadow sm:rounded sm:py-3 sm:px-6">
            <div class="mb-5 ">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-start sm:text-2xl">Masukan Akun</h2>
                <span class="block text-sm text-gray-500">
                    Gunakan akun admin untuk masuk
                </span>
            </div>
            @foreach ($errors->all() as $error)
                <div
                    class="relative flex items-center w-full px-3 py-2 text-red-600 border border-transparent rounded-lg bg-red-50">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                    <h5 class="text-xs font-medium leading-none tracking-tight">{{ $error }}</h5>

                </div>
            @endforeach
            <form class="space-y-5" action="{{ route('guest.auth') }}" method="POST">
                @csrf
                <div>
                    <x-label for="email" label="Email" />
                    <x-input type="email" id="email" name="email" required />
                </div>

                <div>
                    <x-label for="password" label="Password" />
                    <x-input type="password" id="password" name="password" required />
                </div>

                <div>
                    <x-button class="w-full transition duration-300 bg-blue-600 hover:bg-blue-700" label="Masuk" />
                </div>
            </form>

        </div>
    </div>


</x-app-layout>
