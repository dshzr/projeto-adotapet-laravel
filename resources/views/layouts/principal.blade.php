<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        {{-- css tailwind --}}
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

        {{-- fontes do google --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

        {{-- estilo da aplicacao --}}
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <!-- Header Fixo -->
        <header class="fixed top-0 left-0 right-0 bg-blue-600 text-white z-50 p-4">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <a href="/" class="flex items-center space-x-2 text-white hover:text-blue-100 transition duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="font-bold text-xl">AdotaPet</span>
                    </a>
                    <nav class="flex items-center space-x-4">
                        <a href="/dogs/cadastro" class="transition duration-300 bg-white text-blue-600 px-6 py-3 rounded-full font-bold hover:bg-blue-50 transition duration-300">Cadastrar Cão</a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Espaçamento para compensar o header fixo -->
        <div class="pt-16">
            @yield('conteudo')
        </div>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white">
            <div class="container mx-auto px-4 py-8">
                <div class="text-center">
                    <p class="text-gray-300">
                        Desenvolvido com
                        <svg class="w-5 h-5 text-red-500 inline-block mx-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                        </svg>
                        por <span class="font-bold">Wellington Santos</span>
                    </p>
                    <p class="text-gray-400 text-sm mt-2">&copy; {{ date('Y') }} - Todos os direitos reservados</p>
                </div>
            </div>
        </footer>
    </body>
</html>
