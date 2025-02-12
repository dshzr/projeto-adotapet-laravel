@extends('layouts.principal')

@section('titulo','Adoção de Cães')

@section('conteudo')
<div class="bg-gray-100 min-h-screen">
    <!-- Hero Section com Background Image -->
    <div class="relative bg-blue-600 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1450778869180-41d0601e046e"
                 alt="Background"
                 class="w-full h-full object-cover opacity-20">
        </div>
        <div class="relative z-10 container mx-auto px-4 py-20">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Encontre seu novo <span class="text-yellow-300">melhor amigo</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    Dê um lar para quem precisa de amor e carinho
                </p>
            </div>
        </div>
    </div>

    <!-- Seção de Cards dos Cães -->
    <div class="container mx-auto px-4 py-16">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Cães Disponíveis</h2>
            <span class="text-gray-500">Mostrando {{count($dogs)}} {{ count($dogs) > 1 ? 'Cães' : 'Cão' }} </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card do Cão 1 -->
            @foreach($dogs as $dog)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition duration-300">
                <div class="relative">
                    <img src="img/dogs/{{$dog->foto}}"
                         alt="Cachorro 1"
                         class="w-full h-64 object-cover">

                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2"> {{$dog->nome}} </h3>
                    <div class="flex gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">{{$dog->idade}} {{ $dog->idade > 1 ? 'anos' : 'ano' }}</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">{{$dog->raca}}</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">{{$dog->sexo}}</span>
                    </div>
                    <p class="text-gray-600 mb-6">{{$dog->descricao}}.</p>
                    <a href="/dogs/detalhes/{{$dog->id}}" class="block w-full">
                        <button class="w-full cursor-pointer bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2">
                            Quero Adotar
                        </button>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <!-- Seção Por que Adotar -->
    <div class="bg-gradient-to-b from-blue-50 to-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Por que Adotar?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Amor Incondicional</h3>
                    <p class="text-gray-600 leading-relaxed">Ganhe um amigo fiel e companheiro que estará sempre ao seu lado</p>
                </div>
                <div class="text-center">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Salve uma Vida</h3>
                    <p class="text-gray-600 leading-relaxed">Dê uma segunda chance a quem precisa</p>
                </div>
                <div class="text-center">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Felicidade Garantida</h3>
                    <p class="text-gray-600 leading-relaxed">Mais alegria e diversão no seu dia a dia</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
