@extends('layouts.app')

@section('marca-carro', 'Editar carro')

@section('content')


@if ($errors->any())

  <ul>

@endif

	<form action="{{ route('carros.update', $carro) }}" method="post">
   

  @csrf
  @method('put')


  <div class="form-group">	
	<label for='marca' class="form-control-label">Marca1: </label>
	<input type="text" name="marca" class="form-control" value="{{ old('marca', $carro->marca) }}">  	
  </div>

  <div class="form-group">
  	<label for='modelo'>Modelo: </label>
  	<input type="number" name="modelo" class="form-control" value="{{ old('modelo', $carro->modelo) }}">
  </div>

  <div class="form-group">
  	<label for='color'>Color: </label>
    <input type="text" name="color" class="form-control" value="{{ old('color', $carro->color) }}">
  </div>

  <div class="row">
  	
  	<div class="col-md-6 col-sm-12">
  		<a href="{{ route('carros.create') }}" class="btn btn-primary form-control">Registar carro</a>		
  	</div>

  	<div class="col-md-6 col-sm-12">
		<input type="submit" value="Guardar" class="btn btn-primary form-control">
  	</div>
  </div>
</form>
@endsection

