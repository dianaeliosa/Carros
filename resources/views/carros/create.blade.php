@extends('layouts.app')


@section('marca-carro', 'Registrar carro')

@section ('content')

	@if ($errors->any())

	<div class="alert alert-danger">
		<b>Error</b>


	<ul>
		

	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach

	</ul>

	</div>

	@endif

<form action="{{ route('carros.store') }}" method="post">

	@csrf


	<div class="form group">
		<label for="marca" class="form-control-label">Marca:</label>
		<input type="text" name="marca" class="form-control" value="{{ old('marca') }}">
	</div>

	

	<div class="form group">
		<label for="modelo" class="form-control-label">Modelo:</label>
		<input type="number" name="modelo" class="form-control" value="{{ old ('modelo') }}">
	</div>



	<div class="form group">
		<label for="color" class="form-control-label">Color:</label>
		<input type="text" name="color" class="form-control" 	value="{{ old ('color') }}">
	</div>


	<hr>

	<div class="row">
		<div class="cold-md-6 col-sm-12">
		<a href="{{ route('carros.index') }}" class="btn btn-secondary form-control">Regresar a la lista</a>
		</div>
	</div>
		
		<hr>

	<div class="cold-md-6 col-sm-12">
		<input type="submit" value="Guardar" class="btn btn-outline-dark form-control">		
	</div>

	</div>	
	
</form>

@endsection

