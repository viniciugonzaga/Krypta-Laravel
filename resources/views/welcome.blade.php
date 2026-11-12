@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative overflow-hidden min-h-[80vh] flex items-center">
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-600 rounded-full blur-[150px] opacity-20 pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600 rounded-full blur-[150px] opacity-10 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-left">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                Sua identidade.<br>Suas chaves.<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Seu KRYPTA.</span>
            </h1>
            <p class="mt-4 text-lg text-gray-400 max-w-lg leading-relaxed">
                Suas senhas não precisam depender da sua memória. Proteja suas credenciais e sua identidade digital em um cofre físico, portátil e seguro.
            </p>
            <div class="mt-10 flex gap-4">
                <a href="#planos" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg font-bold text-lg transition shadow-[0_0_20px_rgba(147,51,234,0.6)]">
                    Explorar Planos
                </a>
                <a href="{{ route('services') }}" class="bg-transparent border border-purple-500 text-purple-300 hover:bg-purple-900/50 px-8 py-3 rounded-lg font-bold text-lg transition">
                    Conhecer o Sistema
                </a>
            </div>
        </div>
        <div class="md:w-1/2 mt-16 md:mt-0 flex justify-center">
            <!-- Cadeado Ilustrativo -->
            <div class="relative w-80 h-80 border-2 border-purple-500/30 rounded-3xl rotate-3 flex items-center justify-center bg-[#12122b]/50 backdrop-blur-sm shadow-[0_0_50px_rgba(147,51,234,0.2)]">
                <svg class="w-40 h-40 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            </div>
        </div>
    </div>
</div>

<!-- Por que o Krypta existe -->
<div class="bg-[#0a0a1a] py-24 relative border-t border-purple-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-4">Por que o Krypta existe?</h2>
        <p class="text-gray-400 max-w-2xl mx-auto mb-16">A digitalização dos serviços tornou a segurança de dados uma necessidade. Mas os métodos atuais falham em proteger os usuários.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-[#12122b] p-6 rounded-2xl border border-purple-900/50 hover:border-purple-500 transition">
                <div class="w-12 h-12 bg-purple-900/50 rounded-lg flex items-center justify-center mb-4 mx-auto text-purple-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">Ciberataques</h3>
                <p class="text-sm text-gray-400">Vazamentos de dados e invasões crescem exponencialmente no Brasil.</p>
            </div>
            <div class="bg-[#12122b] p-6 rounded-2xl border border-purple-900/50 hover:border-purple-500 transition">
                <div class="w-12 h-12 bg-purple-900/50 rounded-lg flex items-center justify-center mb-4 mx-auto text-purple-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">Memória</h3>
                <p class="text-sm text-gray-400">Usuários recorrem a anotações inseguras por não conseguirem memorizar.</p>
            </div>
            <div class="bg-[#12122b] p-6 rounded-2xl border border-purple-900/50 hover:border-purple-500 transition">
                <div class="w-12 h-12 bg-purple-900/50 rounded-lg flex items-center justify-center mb-4 mx-auto text-purple-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">Inclusão</h3>
                <p class="text-sm text-gray-400">Idosos e pessoas com limitações encontram barreiras em gerencial senhas.</p>
            </div>
            <div class="bg-[#12122b] p-6 rounded-2xl border border-purple-900/50 hover:border-purple-500 transition">
                <div class="w-12 h-12 bg-purple-900/50 rounded-lg flex items-center justify-center mb-4 mx-auto text-purple-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">Roubo de Identidade</h3>
                <p class="text-sm text-gray-400">Credenciais comprometidas resultam em fraudes e perda de privacidade.</p>
            </div>
        </div>
    </div>
</div>

<!-- A Trindade Criptográfica -->
<div class="py-24 bg-[#12122b] border-t border-purple-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-4">A Trindade Criptográfica</h2>
        <p class="text-gray-400 mb-16">Três pilares criptográficos trabalhando em conjunto para garantir confidencialidade.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-[#0a0a1a] p-8 rounded-2xl border border-purple-800">
                <p class="text-purple-500 font-bold text-sm tracking-widest mb-2">CRIPTOGRAFIA SIMÉTRICA</p>
                <h3 class="text-2xl font-bold text-white mb-4">AES-256-GCM</h3>
                <p class="text-gray-400 text-sm">O padrão ouro mundial. Seus dados são cifrados com uma chave de 256 bits e validados com um selo de autenticidade MAC.</p>
            </div>
            <div class="bg-[#0a0a1a] p-8 rounded-2xl border border-purple-800">
                <p class="text-purple-500 font-bold text-sm tracking-widest mb-2">ASSINATURA DIGITAL</p>
                <h3 class="text-2xl font-bold text-white mb-4">Ed25519</h3>
                <p class="text-gray-400 text-sm">Cada hardware gera um par de chaves única. A chave privada nunca sai do chip, criando um vínculo inquebrável.</p>
            </div>
            <div class="bg-[#0a0a1a] p-8 rounded-2xl border border-purple-800">
                <p class="text-purple-500 font-bold text-sm tracking-widest mb-2">DERIVAÇÃO DE CHAVE</p>
                <h3 class="text-2xl font-bold text-white mb-4">Argon2id</h3>
                <p class="text-gray-400 text-sm">Transforma sua senha mestra em uma chave robusta. Ataques de força bruta ou GPUs se tornam computacionalmente inviáveis.</p>
            </div>
        </div>
    </div>
</div>

<!-- Planos -->
<div id="planos" class="py-24 bg-[#0a0a1a] border-t border-purple-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white">Nossos Planos</h2>
            <p class="text-gray-400 mt-4">Escolha o nível de proteção ideal para você.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($plans as $plan)
            <div class="bg-[#12122b] border border-purple-900/50 rounded-2xl p-6 hover:border-purple-500 transition duration-300 shadow-xl flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-white">{{ $plan->name }}</h3>
                    <p class="text-xs text-gray-400 mt-2 h-8">{{ $plan->description }}</p>
                    <div class="mt-4 flex items-baseline">
                        <span class="text-3xl font-extrabold text-white">R$ {{ number_format($plan->price, 2, ',', '.') }}</span>
                        <span class="text-gray-500 ml-1 text-sm">/mês</span>
                    </div>
                    <ul class="mt-6 space-y-2 mb-8">
                        @foreach(explode(',', $plan->features) as $feature)
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-purple-500 mr-2 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-300 text-xs">{{ trim($feature) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <a href="{{ route('register') }}" class="block w-full text-center bg-purple-900/50 hover:bg-purple-600 text-white py-2 rounded-lg transition border border-purple-700/50 text-sm font-medium">
                    Assinar
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Depoimentos (Dinâmico) -->
<div class="py-24 bg-[#12122b] border-t border-purple-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white text-center mb-12">O que dizem sobre o Krypta</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($testimonials as $testimonial)
            <div class="bg-[#0a0a1a] p-6 rounded-2xl border border-purple-900/50">
                <svg class="w-8 h-8 text-purple-600 mb-4 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <p class="text-gray-300 italic mb-6">"{{ $testimonial->content }}"</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-purple-800 rounded-full flex items-center justify-center text-white font-bold">{{ substr($testimonial->name, 0, 1) }}</div>
                    <div class="ml-3">
                        <p class="text-white font-medium text-sm">{{ $testimonial->name }}</p>
                        <p class="text-purple-400 text-xs">{{ $testimonial->role }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection