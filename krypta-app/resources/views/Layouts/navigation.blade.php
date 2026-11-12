<nav class="bg-[#12122b]/90 backdrop-blur-md border-b border-purple-900/50 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-3xl font-bold tracking-[0.2em] text-white">
                    KRYPTA
                </a>
                <!-- Links -->
                <div class="hidden space-x-10 sm:flex ml-16">
                    <a href="{{ route('home') }}" class="text-sm font-medium text-purple-300 hover:text-white transition">Início</a>
                    <a href="{{ route('services') }}" class="text-sm font-medium text-purple-300 hover:text-white transition">Serviços</a>
                    <a href="{{ route('home') }}#planos" class="text-sm font-medium text-purple-300 hover:text-white transition">Produtos</a>
                    <a href="{{ route('contact') }}" class="text-sm font-medium text-purple-300 hover:text-white transition">Contatos</a>
                </div>
            </div>

            <!-- Auth -->
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-purple-300 hover:text-white">Dashboard</a>
                    @if(Auth::user()->email == 'test@example.com')
                        <a href="{{ route('testimonials.index') }}" class="text-xs bg-purple-900 text-purple-200 px-3 py-1 rounded-full border border-purple-500">Admin</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-400 hover:text-red-300">Sair</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-300 hover:text-white">Entrar</a>
                    <a href="{{ route('register') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2.5 rounded-lg font-medium transition shadow-[0_0_15px_rgba(147,51,234,0.5)] border border-purple-500">
                        Criar Conta
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>