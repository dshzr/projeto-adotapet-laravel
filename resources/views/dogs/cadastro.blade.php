@extends('layouts.principal')

@section('titulo','Cadastrar cão')

@section('conteudo')
<div class="bg-gray-100 min-h-screen">
    <!-- Hero Section -->
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold">Cadastrar um Cão</h1>
            <p class="text-xl mt-4 opacity-90">Ajude um cachorro a encontrar um novo lar</p>
        </div>
    </div>

    <!-- Formulário de Cadastro -->
    <form action="/dogs" method="POST" enctype="multipart/form-data" class="container mx-auto px-6 py-12">
        @csrf
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-10">
            <form class="space-y-8">
                <!-- Informações Básicas -->
                <div class="border-b pb-8 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Informações Básicas</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="nome">
                                Nome do Cão
                            </label>
                            <input type="text" id="nome" name="nome"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="Ex: Rex">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="idade">
                                Idade Aproximada
                            </label>
                            <input type="number" id="idade" name="idade"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="Em anos">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="raca">
                                Raça
                            </label>
                            <input type="text" id="raca" name="raca"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="Ex: Vira-lata">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="sexo">
                                Sexo
                            </label>
                            <select id="sexo" name="sexo"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                                <option value="">Selecione</option>
                                <option value="macho">Macho</option>
                                <option value="femea">Fêmea</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Características -->
                <div class="border-b pb-8 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Características</h2>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="porte">
                                Porte
                            </label>
                            <select id="porte" name="porte"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                                <option value="">Selecione</option>
                                <option value="pequeno">Pequeno</option>
                                <option value="medio">Médio</option>
                                <option value="grande">Grande</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2" for="descricao">
                                Descrição
                            </label>
                            <textarea id="descricao" name="descricao" rows="4"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="Descreva a personalidade e características do cão..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Saúde -->
                <div class="border-b pb-8 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Saúde</h2>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <input type="checkbox" id="vacinado" name="vacinado" value="1" class="mr-2">
                            <label for="vacinado" class="text-gray-700 font-semibold">Vacinado</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="castrado" name="castrado" value="1" class="mr-2">
                            <label for="castrado" class="text-gray-700 font-semibold">Castrado</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="vermifugado" name="vermifugado" value="1" class="mr-2">
                            <label for="vermifugado" class="text-gray-700 font-semibold">Vermifugado</label>
                        </div>
                    </div>
                </div>

                <!-- Fotos -->
                <div class="border-b pb-8 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Fotos</h2>
                    <div class="space-y-6">
                        <div class="flex items-center justify-center w-full">
                            <label for="image" class="w-full flex flex-col items-center px-4 py-6 bg-white rounded-lg border-2 border-dashed border-gray-300 cursor-pointer hover:border-blue-500">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span class="mt-2 text-gray-600">Adicionar foto</span>
                                <input id="image" name="image" type="file" class="hidden" accept="image/*" onchange="previewImage(this)">
                            </label>
                        </div>
                        <!-- Preview da imagem -->
                        <div id="imagePreview" class="hidden mt-4">
                            <img id="preview" class="max-w-full h-auto max-h-64 rounded-lg mx-auto" src="#" alt="Preview da imagem">
                        </div>
                    </div>
                </div>

                <!-- Adicione este script antes do final do formulário -->
                <script>
                    function previewImage(input) {
                        const preview = document.getElementById('preview');
                        const previewDiv = document.getElementById('imagePreview');

                        if (input.files && input.files[0]) {
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                preview.src = e.target.result;
                                previewDiv.classList.remove('hidden');
                            }

                            reader.readAsDataURL(input.files[0]);
                        } else {
                            preview.src = '#';
                            previewDiv.classList.add('hidden');
                        }
                    }
                </script>

                <!-- Botões -->
                <div class="flex justify-end space-x-6 pt-4">
                    <a href="/" class="px-8 py-4 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition duration-300 text-lg">
                        Cancelar
                    </a>
                    <button type="submit" class="px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 text-lg font-semibold">
                        Cadastrar Cão
                    </button>
                </div>
            </form>
        </div>
    </form>
</div>
@endsection
