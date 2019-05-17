@extends('layouts.app')

@section('marca-carro', 'Detalle de carro')

@section('content')

	<h1>{{ $carro->marca }}</h1>

<ul>
	
	<li>Modelo: {{ $carro->modelo }}</li>
	<li>Color: {{ $carro->color }}</li>

</ul>

<div class="row">

	<div class="col-md-6 col-sm-12">
		
		<a href="{{ route('carros.index') }}" class="btn btn-secondary form-control">Regresar</a>


	</div>

	<div class="col-md-6 col-sm-12">
		
		<form action="{{ route('carros.destroy', $carro) }}"  method="post">


		@csrf
		@method('delete')

		<input type="submit" value="Eliminar" class="btn btn-danger form-control">
		


		</form>
	</div>
</div>

@endsection