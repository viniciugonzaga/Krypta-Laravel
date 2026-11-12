@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-gradient-to-r from-[#12122b] to-[#1a1a3a] border border-purple-800 rounded-2xl p-8 mb-8 shadow-2xl relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="text-3xl font-bold text-white">Bem-vindo de volta, {{ Auth::user()->name }}!</h2>
            <p class="text-purple-300 mt-2">Gerencie sua conta, assinaturas e dispositivos Krypta.</p>
            <a href="{{ route('plans.index') }}" class="inline-block mt-6 bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg font-medium transition shadow-[0_0_15px_rgba(147,51,234,0.4)]">
                Gerenciar Planos (CRUD)
            </a>
        </div>
        <div class="absolute right-0 top-0 w-64 h-64 bg-purple-600 rounded-full blur-[80px] opacity-30"></div>
    </div>

    <!-- Status do Sistema (Mockup) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-[#12122b] p-6 rounded-xl border border-purple-900/50">
            <h3 class="text-gray-400 text-sm font-medium">Status do Cofre</h3>
            <p class="text-green-400 text-2xl font-bold mt-2 flex items-center">
                <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span> Seguro
            </p>
        </div>
        <div class="bg-[#12122b] p-6 rounded-xl border border-purple-900/50">
            <h3 class="text-gray-400 text-sm font-medium">Dispositivo Físico</h3>
            <p class="text-white text-2xl font-bold mt-2">Conectado</p>
        </div>
        <div class="bg-[#12122b] p-6 rounded-xl border border-purple-900/50">
            <h3 class="text-gray-400 text-sm font-medium">Plano Atual</h3>
            <p class="text-purple-400 text-2xl font-bold mt-2">Premium</p>
        </div>
    </div>
</div>
@endsection