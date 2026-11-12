<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Krypta - Segurança Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#0a0a1a] text-gray-200 min-h-screen flex flex-col">
    
    @include('layouts.navigation')

    <!-- Conteúdo Principal -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#12122b] border-t border-purple-900/50 py-6 mt-12 text-center text-sm text-gray-500">
        <p>&copy; 2026 Krypta - TCC Técnico do curso de Desenvolvimento de Sistemas.</p>
    </footer>
</body>
</html>