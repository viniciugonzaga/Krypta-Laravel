@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-bold text-white">Gerenciar Planos</h1>
            <p class="text-gray-400 mt-1">Visualize, edite ou exclua os planos do sistema.</p>
        </div>
        <a href="{{ route('plans.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2.5 rounded-lg font-medium transition shadow-[0_0_15px_rgba(147,51,234,0.4)] flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Novo Plano
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-900/50 border border-green-500 text-green-200 p-4 rounded-lg mb-6 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-[#12122b] rounded-xl border border-purple-900/50 overflow-hidden shadow-xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-[#0a0a1a] text-purple-300 text-sm uppercase tracking-wider">
                    <tr>
                        <th class="p-4 border-b border-purple-900/50">ID</th>
                        <th class="p-4 border-b border-purple-900/50">Nome do Plano</th>
                        <th class="p-4 border-b border-purple-900/50">Preço</th>
                        <th class="p-4 border-b border-purple-900/50 text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-purple-900/30">
                    @foreach($plans as $plan)
                    <tr class="hover:bg-purple-900/10 transition">
                        <td class="p-4 text-gray-400">#{{ $plan->id }}</td>
                        <td class="p-4 font-medium text-white">{{ $plan->name }}</td>
                        <td class="p-4 text-purple-400">R$ {{ number_format($plan->price, 2, ',', '.') }}</td>
                        <td class="p-4 text-right flex justify-end gap-3">
                            <a href="{{ route('plans.show', $plan) }}" class="text-blue-400 hover:text-blue-300 p-2 bg-blue-900/20 rounded-md" title="Visualizar">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </a>
                            <a href="{{ route('plans.edit', $plan) }}" class="text-yellow-400 hover:text-yellow-300 p-2 bg-yellow-900/20 rounded-md" title="Editar">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </a>
                            <form action="{{ route('plans.destroy', $plan) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este plano?');" class="inline">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300 p-2 bg-red-900/20 rounded-md" title="Excluir">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection