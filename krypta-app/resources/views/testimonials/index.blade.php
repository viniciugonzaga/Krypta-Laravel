@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-white">Gerenciar Depoimentos</h1>
        <a href="{{ route('testimonials.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2.5 rounded-lg font-medium transition">Novo Depoimento</a>
    </div>

    @if(session('success'))
        <div class="bg-green-900/50 border border-green-500 text-green-200 p-4 rounded-lg mb-6">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($testimonials as $testimonial)
        <div class="bg-[#12122b] rounded-xl border border-purple-900/50 p-6 relative">
            <h3 class="text-xl font-bold text-white">{{ $testimonial->name }}</h3>
            <p class="text-purple-400 text-sm mb-4">{{ $testimonial->role }}</p>
            <p class="text-gray-300 text-sm mb-6 italic">"{{ $testimonial->content }}"</p>
            
            <div class="flex space-x-2 border-t border-purple-900/50 pt-4">
                <a href="{{ route('testimonials.edit', $testimonial) }}" class="text-yellow-400 hover:text-yellow-300 text-sm font-medium">Editar</a>
                <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Excluir?')">
                    @csrf @method('DELETE')
                    <button class="text-red-400 hover:text-red-300 text-sm font-medium ml-4">Excluir</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection