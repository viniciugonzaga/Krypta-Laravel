@extends('layouts.app')

@section('content')
<div class="min-h-[70vh] flex flex-col items-center justify-center text-center px-4">
    <h1 class="text-8xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-pink-500 mb-4">
        404
    </h1>
    <h2 class="text-3xl font-bold text-white mb-2">Página não encontrada</h2>
    <p class="text-gray-400 mb-8 max-w-md">
        Ops! Parece que você tentou acessar um arquivo que não existe no nosso cofre seguro.
    </p>
    <a href="{{ route('home') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg font-bold transition shadow-[0_0_15px_rgba(147,51,234,0.5)]">
        Voltar para o Início
    </a>
</div>
@endsection