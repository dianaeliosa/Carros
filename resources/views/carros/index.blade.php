<a href="{{ route ('carros.create') }}">Registrar carros</a>
	<hr>

<table>

	<thead>
		<tr>
			<td>Marca</td>
			<td></td>
			<td></td>

		</tr>

	</thead>

	<tbody>
		

	@forelse($carros as $carro)
	<tr>
		<td>{{ $carro->marca }}</td>
		<td>
			<a href="{{ route('carros.show', $carro) }}">Mostrar detalle del carro</a>
		</td>

		<td>
			<a href="{{ route('carros.edit', $carro) }}">Editar registro</a>

		</td>

	</tr>





@empty

	<h1>No hay carros registrados.</h1>

	@endforelse
		</tbody>

</table>

