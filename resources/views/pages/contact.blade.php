@extends('layouts.app')

@section('content')
<div class="py-20 bg-[#0a0a1a] min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Estamos aqui para proteger o que importa.</h1>
            <p class="text-gray-400">Tem dúvidas sobre o Krypta, nossos recursos ou planos? Entre em contato.</p>
        </div>

        <div class="bg-[#12122b] border border-purple-900/50 rounded-2xl p-8 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-purple-600 rounded-full blur-[100px] opacity-20 pointer-events-none"></div>

            @if(session('success'))
                <div class="bg-green-900/50 border border-green-500 text-green-200 p-4 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="relative z-10 space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-purple-300 mb-2">Nome Completo</label>
                        <input type="text" name="name" required class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-purple-300 mb-2">E-mail</label>
                        <input type="email" name="email" required class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-purple-300 mb-2">Telefone (Opcional)</label>
                    <input type="text" name="phone" class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-purple-300 mb-2">Mensagem</label>
                    <textarea name="message" rows="5" required class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Explique sua dúvida..."></textarea>
                </div>
                <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-lg transition shadow-[0_0_15px_rgba(147,51,234,0.4)]">
                    Enviar Mensagem
                </button>
            </form>
        </div>
    </div>
</div>
@endsection