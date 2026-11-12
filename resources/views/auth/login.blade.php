<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-green-400" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-purple-300">E-mail</label>
            <input id="email" class="block mt-1 w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-purple-300">Senha</label>
            <input id="password" class="block mt-1 w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-[#0a0a1a] border-purple-800 text-purple-600 shadow-sm focus:ring-purple-500" name="remember">
                <span class="ml-2 text-sm text-gray-400">Lembrar de mim</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-6">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-400 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" href="{{ route('password.request') }}">
                    Esqueceu sua senha?
                </a>
            @endif

            <button type="submit" class="ml-4 bg-purple-600 hover:bg-purple-700 text-white px-6 py-2.5 rounded-lg font-bold transition shadow-[0_0_15px_rgba(147,51,234,0.4)]">
                Entrar
            </button>
        </div>
        
        <div class="text-center mt-6 pt-6 border-t border-purple-900/50">
            <p class="text-sm text-gray-400">Ainda não tem uma conta?</p>
            <a href="{{ route('register') }}" class="text-purple-400 hover:text-purple-300 font-medium text-sm mt-1 inline-block">Criar conta agora</a>
        </div>
    </form>
</x-guest-layout>