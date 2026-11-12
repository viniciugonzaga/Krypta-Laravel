@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-12">
    <div class="bg-[#12122b] border border-purple-900/50 rounded-2xl p-8 shadow-2xl">
        <h1 class="text-2xl font-bold text-white mb-6">Criar Depoimento</h1>
        <form action="{{ route('testimonials.store') }}" method="POST">
            @csrf
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-purple-300 mb-2">Nome</label>
                    <input type="text" name="name" required class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-purple-300 mb-2">Cargo / Profissão</label>
                    <input type="text" name="role" required class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-purple-300 mb-2">Conteúdo do Depoimento</label>
                    <textarea name="content" rows="4" required class="w-full bg-[#0a0a1a] border border-purple-800 rounded-lg p-3 text-white"></textarea>
                </div>
            </div>
            <div class="mt-8 flex justify-end gap-4">
                <a href="{{ route('testimonials.index') }}" class="px-6 py-2.5 text-gray-400">Cancelar</a>
                <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2.5 rounded-lg font-bold">Salvar</button>
            </div>
        </form>
    </div>
</div>
@endsection