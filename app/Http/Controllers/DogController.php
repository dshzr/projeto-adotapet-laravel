<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dog;

class DogController extends Controller
{
   //pagina de inicio
   public function index(){
        $dogs = Dog::all();
        return view('home', ['dogs' => $dogs]);
    }

    public function create(){
        return view('dogs.cadastro');
    }

    public function show($id){

        $dog = Dog::findOrFail($id);
        return view('dogs.detalhes', ['dog' => $dog]);

    }


    public function store(Request $request)
    {
        $dog = new Dog;

        $dog->nome = $request->nome;
        $dog->idade = $request->idade;
        $dog->raca = $request->raca;
        $dog->sexo = $request->sexo;
        $dog->porte = $request->porte;
        $dog->descricao = $request->descricao;
        $dog->vacinado = isset($request->vacinado) ? 1 : 0;
        $dog->castrado = isset($request->castrado )? 1 : 0;
        $dog->vermifugado = isset($request->vermifugado) ? 1 : 0;

        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
           $requestImage = $request->image;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/dogs'), $imageName);

            $dog->foto = $imageName;
        }

        $dog->save();

        return view('dogs.success');
    }

}
