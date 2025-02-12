@extends('layouts.principal')

@section('titulo','Cadastro Realizado')

@section('conteudo')
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full text-center">
        <div class="mb-6">
            <svg class="mx-auto h-16 w-16 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Cadastro Realizado com Sucesso!</h2>
        <p class="text-gray-600 mb-8">O cachorro foi cadastrado e já está disponível para adoção.</p>
        <a href="/" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            Voltar para Home
        </a>
    </div>
</div>
@endsection
