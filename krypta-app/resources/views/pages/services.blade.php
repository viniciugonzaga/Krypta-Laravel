@extends('layouts.app')

@section('content')
<div class="py-20 bg-[#0a0a1a] relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-purple-600 rounded-full blur-[150px] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center mb-16">
        <h1 class="text-5xl font-bold text-white mb-6">Nossos Serviços</h1>
        <p class="text-xl text-gray-400 max-w-2xl mx-auto">Ecossistema completo para sua segurança física e digital.</p>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Card 1 -->
        <div class="bg-[#12122b] rounded-3xl p-8 border border-purple-900/50">
            <div class="w-16 h-16 bg-purple-900/50 rounded-2xl flex items-center justify-center text-purple-400 mb-6 border border-purple-500/30">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
            </div>
            <h2 class="text-2xl font-bold text-white mb-4">Dispositivo Físico (Hardware)</h2>
            <p class="text-gray-400 leading-relaxed mb-6">
                O cofre definitivo. Um dispositivo portátil com tela e botões físicos que armazena suas chaves criptográficas de forma offline (air-gapped). Imune a vírus de computador e ataques remotos.
            </p>
            <ul class="space-y-3">
                <li class="flex items-center text-gray-300"><svg class="w-5 h-5 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Conexão NFC Segura</li>
                <li class="flex items-center text-gray-300"><svg class="w-5 h-5 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Blindagem contra Keyloggers</li>
                <li class="flex items-center text-gray-300"><svg class="w-5 h-5 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Autenticação em 2 Fatores (MFA)</li>
            </ul>
        </div>

        <!-- Card 2 -->
        <div class="bg-[#12122b] rounded-3xl p-8 border border-purple-900/50">
            <div class="w-16 h-16 bg-purple-900/50 rounded-2xl flex items-center justify-center text-purple-400 mb-6 border border-purple-500/30">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <h2 class="text-2xl font-bold text-white mb-4">Aplicativo Krypta</h2>
            <p class="text-gray-400 leading-relaxed mb-6">
                A interface amigável. Gerencie suas credenciais, organize senhas por categorias e receba alertas de segurança em tempo real, tudo isso de forma sincronizada, mas com segurança ponta a ponta.
            </p>
            <ul class="space-y-3">
                <li class="flex items-center text-gray-300"><svg class="w-5 h-5 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Criptografia Zero-Knowledge</li>
                <li class="flex items-center text-gray-300"><svg class="w-5 h-5 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Herança Digital e Sucessão</li>
                <li class="flex items-center text-gray-300"><svg class="w-5 h-5 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Bloqueio remoto instantâneo</li>
            </ul>
        </div>
    </div>
</div>
@endsection