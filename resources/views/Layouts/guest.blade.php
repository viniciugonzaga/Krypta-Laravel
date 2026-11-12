<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Krypta - Acesso Seguro</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-200 antialiased bg-[#0a0a1a] min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative overflow-hidden">
        
        <!-- Efeitos de fundo (Brilho roxo) -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-600 rounded-full blur-[150px] opacity-20 pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600 rounded-full blur-[150px] opacity-10 pointer-events-none"></div>

        <!-- Logo -->
        <div class="relative z-10 mb-8">
            <a href="/">
                <h1 class="text-4xl font-bold tracking-[0.2em] text-white">KRYPTA</h1>
            </a>
        </div>

        <!-- Card do Formulário -->
        <div class="relative z-10 w-full sm:max-w-md mt-2 px-8 py-10 bg-[#12122b] shadow-[0_0_30px_rgba(147,51,234,0.15)] overflow-hidden sm:rounded-2xl border border-purple-900/50">
            {{ $slot }}
        </div>
    </body>
</html>