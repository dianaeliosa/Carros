<h1>{{ $carro -> marca }}</h1>

<ul>
	
	<li>Modelo: {{ $carro->modelo }}</li>
	<li>Color: {{ $carro->color }}</li>


</ul>

<form action="{{ route('carros.destroy', $carro) }}"  method="post">

	@csrf
	@method('delete')

	<input type="submit" value="Eliminar">
	


</form>

<a href="{{ route('carros.index') }}">Regresar a la lista</a>