@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-[#12122b] border border-purple-900/50 rounded-2xl p-8 shadow-2xl">
        <div class="mb-8 border-b border-purple-900/50 pb-4">
            <h1 class="text-2xl font-bold text-white">Criar Novo Plano</h1>
            <p class="text-gray-400 text-sm mt-1">Preencha os dados abaixo para adicionar um plano ao sistema.</p>
        </div>

        <form action="{{ route('plans.store') }}" method="POST">
            @csrf
            
            <div class="space-y-6">
                <!-- Nome -->
                <div>
                    <label for="name" class="block text-sm font-medium text-purple-300 mb-2">Nome do Plano</label>
                    <input type="text" name="name" id="name" required class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition">
                </div>

                <!-- Preço -->
                <div>
                    <label for="price" class="block text-sm font-medium text-purple-300 mb-2">Preço (R$)</label>
                    <input type="number" step="0.01" name="price" id="price" required class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition">
                </div>

                <!-- Descrição -->
                <div>
                    <label for="description" class="block text-sm font-medium text-purple-300 mb-2">Descrição</label>
                    <textarea name="description" id="description" rows="3" class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"></textarea>
                </div>

                <!-- Features -->
                <div>
                    <label for="features" class="block text-sm font-medium text-purple-300 mb-2">Recursos (separados por vírgula)</label>
                    <input type="text" name="features" id="features" placeholder="Ex: Cofre de credenciais, Senha Mestra, AES-256" class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-transparent transition">
                </div>
            </div>

            <div class="mt-8 flex justify-end gap-4">
                <a href="{{ route('plans.index') }}" class="px-6 py-2.5 text-gray-400 hover:text-white transition">Cancelar</a>
                <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2.5 rounded-lg font-bold transition shadow-[0_0_15px_rgba(147,51,234,0.4)]">
                    Salvar Plano
                </button>
            </div>
        </form>
    </div>
</div>
@endsection