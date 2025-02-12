@extends('layouts.principal')

@section('titulo','Detalhes do Cão')

@section('conteudo')
<div class="bg-gray-100 min-h-screen">
    <!-- Hero Section com Foto Principal -->
    <div class="bg-blue-600 text-white">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="w-full md:w-1/2">
                    <img src="/img/dogs/{{$dog->foto}}"
                         alt="Foto do Cão"
                         class="w-full h-96 object-cover rounded-lg shadow-lg">
                </div>
                <div class="w-full md:w-1/2">
                    <h1 class="text-4xl font-bold mb-2">{{$dog->nome}}</h1>
                    <div class="flex gap-4 mb-4">
                        <span class="bg-blue-500 px-3 py-1 rounded-full text-sm">{{$dog->raca}}</span>
                        <span class="bg-blue-500 px-3 py-1 rounded-full text-sm">{{$dog->idade}} {{ $dog->idade > 1 ? 'anos' : 'ano' }}</span>
                        <span class="bg-blue-500 px-3 py-1 rounded-full text-sm">Macho</span>
                    </div>
                    <p class="text-lg mb-6">{{$dog->descricao}} </p>
                    <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-blue-50 transition duration-300">
                        Quero Adotar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Informações Detalhadas -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Características -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Características</h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <!-- Ícone de régua/tamanho para porte -->
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 4v16M4 4v16M12 4v16M4 12h16"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">Porte: {{$dog->porte}}</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <!-- Ícone de gênero/sexo -->
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v6m0 0l3-3m-3 3l-3-3"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">Sexo: {{$dog->sexo}}</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <!-- Ícone de pata para raça -->
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.14 5.86a4 4 0 00-5.66 0L12 7.34l-1.48-1.48a4 4 0 00-5.66 5.66l1.48 1.48L12 18.66l5.66-5.66 1.48-1.48a4 4 0 000-5.66z"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">Raça: {{$dog->raca}}</span>
                    </div>
                </div>
            </div>

            <!-- Saúde -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Saúde</h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 {{ $dog->vacinado ? 'bg-green-100' : 'bg-red-100' }} rounded-full flex items-center justify-center">
                            @if($dog->vacinado)
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            @else
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            @endif
                        </div>
                        <span class="text-gray-700">Vacinado</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 {{ $dog->castrado ? 'bg-green-100' : 'bg-red-100' }} rounded-full flex items-center justify-center">
                            @if($dog->castrado)
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            @else
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            @endif
                        </div>
                        <span class="text-gray-700">Castrado</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 {{ $dog->vermifugado ? 'bg-green-100' : 'bg-red-100' }} rounded-full flex items-center justify-center">
                            @if($dog->vermifugado)
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            @else
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            @endif
                        </div>
                        <span class="text-gray-700">Vermifugado</span>
                    </div>
                </div>
            </div>
        </div>



        <!-- Processo de Adoção -->
        <div class="mt-12 bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Processo de Adoção</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 font-bold">1</span>
                    </div>
                    <h3 class="font-bold mb-2">Entre em Contato</h3>
                    <p class="text-gray-600">Clique no botão "Quero Adotar" e preencha o formulário</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 font-bold">2</span>
                    </div>
                    <h3 class="font-bold mb-2">Entrevista</h3>
                    <p class="text-gray-600">Conversaremos para conhecer melhor você e sua família</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 font-bold">3</span>
                    </div>
                    <h3 class="font-bold mb-2">Adoção</h3>
                    <p class="text-gray-600">Assinatura do termo de adoção e encontro com seu novo amigo</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
