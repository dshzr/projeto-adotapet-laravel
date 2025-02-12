<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DogController;


//rotas de paginas
Route::get('/', [DogController::class, 'index']);
Route::get('dogs/cadastro', [DogController::class, 'create']);
Route::get('dogs/detalhes/{id}', [DogController::class, 'show']);
Route::get('dogs/success', function(){
    return view('dogs.success');
});

//rotas de acoes
Route::post('/dogs', [DogController::class, 'store']);

