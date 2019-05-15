<?php

namespace App\Http\Controllers;


use App\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index(){

    	$carros= Carro::all();
    	return view ('carros.index', ['carros' => $carros]);
    }

    public function create(){

    	return view ('carros.create');
    }

    public function store(Request $request){

    	$request->validate([
    		'marca'=> 'required|min:5|max:20',
    		'modelo'=> 'required|numeric|max:2019',
    		'color'=> 'required|min:6|max:40'


    	]);
    	$carro = new Carro();
    	$carro->fill($request->all());
    	$carro->save();

    	return redirect()->route('carros.index');
   }

   public function show(Carro $carro){

   		return view('carros.show', ['carro' => $carro]);	

   }

   public function edit(Carro $carro){

   		return view('carros.edit', ['carro' => $carro]);
	}

  public function update(Request $request, Carro $carro){

    $request->validate([
      'marca'=> 'required|min:5|max:20',
      'modelo'=> 'required|numeric|max:2019',
      'color'=> 'required|min:6|max:40'

    ]);

    $carro->update($request->all());

    return redirect()->route('carros.show', $carro);


  }

  public function destroy(Carro $carro){

    $carro->delete();

    return redirect()->route('carros.index');
  }
}


