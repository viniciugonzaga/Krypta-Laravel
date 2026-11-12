<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-purple-300">Nome Completo</label>
            <input id="name" class="block mt-1 w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-purple-300">E-mail</label>
            <input id="email" class="block mt-1 w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-purple-300">Senha</label>
            <input id="password" class="block mt-1 w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-purple-300">Confirmar Senha</label>
            <input id="password_confirmation" class="block mt-1 w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <a class="underline text-sm text-gray-400 hover:text-white rounded-md" href="{{ route('login') }}">
                Já é registrado?
            </a>

            <button type="submit" class="ml-4 bg-purple-600 hover:bg-purple-700 text-white px-6 py-2.5 rounded-lg font-bold transition shadow-[0_0_15px_rgba(147,51,234,0.4)]">
                Criar Conta
            </button>
        </div>
    </form>
</x-guest-layout>