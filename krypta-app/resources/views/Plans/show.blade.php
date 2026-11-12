@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-[#12122b] border border-purple-900/50 rounded-2xl p-8 shadow-2xl relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-purple-600 rounded-full blur-[100px] opacity-20"></div>
        
        <div class="relative z-10">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-white">{{ $plan->name }}</h1>
                    <p class="text-purple-400 text-xl font-medium mt-2">R$ {{ number_format($plan->price, 2, ',', '.') }}<span class="text-gray-500 text-sm">/mês</span></p>
                </div>
                <a href="{{ route('plans.index') }}" class="text-gray-400 hover:text-white flex items-center gap-2 bg-[#0a0a1a] px-4 py-2 rounded-lg border border-purple-900/50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Voltar
                </a>
            </div>

            <div class="mt-8 border-t border-purple-900/50 pt-6">
                <h3 class="text-lg font-medium text-white mb-2">Descrição</h3>
                <p class="text-gray-300 leading-relaxed">{{ $plan->description ?? 'Nenhuma descrição fornecida.' }}</p>
            </div>

            <div class="mt-8 border-t border-purple-900/50 pt-6">
                <h3 class="text-lg font-medium text-white mb-4">Recursos Inclusos</h3>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @if($plan->features)
                        @foreach(explode(',', $plan->features) as $feature)
                        <li class="flex items-center bg-[#0a0a1a] p-3 rounded-lg border border-purple-900/30">
                            <svg class="w-5 h-5 text-purple-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-300">{{ trim($feature) }}</span>
                        </li>
                        @endforeach
                    @else
                        <p class="text-gray-500">Nenhum recurso listado.</p>
                    @endif
                </ul>
            </div>
            
            <div class="mt-10 flex gap-4">
                <a href="{{ route('plans.edit', $plan) }}" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2.5 rounded-lg font-bold transition">
                    Editar Plano
                </a>
            </div>
        </div>
    </div>
</div>
@endsection