@extends('layouts.app')

@section('marca_carro', 'Lista de carros')

@section('content')

<div class="text-rigth">
	<a href="{{ route ('carros.create') }}" class="btn btn-warning">Registrar carros</a>
</div>

	<hr>

<table class="table table-hover">

	<thead>
		<tr>
			<td>Marca</td>
			<td>Detalle</td>
			<td>Editar</td>

		</tr>

	</thead>

	<tbody>
		

	@forelse($carros as $carro)
	<tr>
		<td>{{ $carro->marca }}</td>
		<td>
			<a href="{{ route('carros.show', $carro) }}" class="btn btn-outline-dark">Mostrar</a>
		</td>

		<td>
			<a href="{{ route('carros.edit', $carro) }}" class="btn btn-outline-info">Editar</a>

		</td>

	</tr>


@empty

	<h1>No hay carros registrados.</h1>

	@endforelse
		</tbody>

</table>

@endsection

