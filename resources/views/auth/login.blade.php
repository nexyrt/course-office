<x-guest-layout>
    <x-modal>
        <form action="{{route('auth.authenticate')}}" method="post">
            @csrf
            {{-- Header --}}
            <h1
                class="mb-4 text-center my-5 text-2xl font-semibold leading-none tracking-tight text-gray-900 dark:text-white">
                Sign In</h1>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            </h1>

            {{-- Email --}}
            <x-input.text title="Email" type="email" name="email" placeholder="email@gmail.com" />

            {{-- Password --}}
            <x-input.text title="Password" type="password" name="password" />

            {{-- Masuk --}}
            <x-button class="w-full" title="Masuk" type="submit" />

            {{-- Daftar --}}
            <div class="text-sm my-3 font-medium text-gray-500 dark:text-gray-300">
                Belum punya akun? <a href="/register"
                    class="text-blue-700 hover:underline dark:text-blue-500">Daftar</a>
            </div>
        </form>
    </x-modal>
</x-guest-layout>
