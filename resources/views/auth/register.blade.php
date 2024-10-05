<x-guest-layout>
    <x-modal>
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf 

            <h1
                class="mb-4 text-center my-5 text-xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">
                Buat <span
                    class="underline underline-offset-3 decoration-2 decoration-blue-400 dark:decoration-blue-600">akun</span>
            </h1>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

            <!-- Full Name & Email -->
            <div class="grid grid-cols-2 gap-x-5">
                <x-input.text name="name" title="Nama Lengkap" type="text" placeholder="Your fullname" required />
                <x-input.text name="email" title="Email" type="email" placeholder="email@gmail.com"
                    required />
            </div>

            <!-- Password -->
            <x-input.text name="password" title="Password" type="password" required />

            <!-- Confirm Password -->
            <x-input.text name="password_confirmation" title="Konfirmasi Password" type="password" required />

            <!-- Phone -->
            <x-input.phone name="phone" title="Phone" placeholder="Nomor Hp anda" required />

            <!-- Role -->
            <x-input.select name="role" title="Siapa anda?" :options="['parent'=>'Orang Tua', 'admin'=>'Admin', 'teacher'=>'Guru']" required />

            <!-- Submit Button -->
            <x-button class="w-full" title="Daftar" type="submit" />

            <div class="text-sm my-3 font-medium text-gray-500 dark:text-gray-300">
                Sudah mempunyai akun? <a href="{{ route('login') }}"
                    class="text-blue-700 hover:underline dark:text-blue-500">Masuk</a>
            </div>
        </form>
    </x-modal>
</x-guest-layout>
