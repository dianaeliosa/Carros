@if ($errors->any())

	<ul>

		@foreach($errors->all() as $error)

			<li>{{ $error }}</li>

		@endforeach


	</ul>

@endif

<form action="{{ route('carros.store') }}" method="post">

	@csrf

	<label for="marca">Marca:</label>
	<input type="text" name="marca" value="{{ old('marca') }}">

	<label for="modelo">Modelo:</label>
	<input type="number" name="modelo" value="{{ old ('modelo') }}">

	<label for="color">Color:</label>
	<input type="text" name="color" value="{{ old ('color') }}">

	<input type="submit" value="Guardar">


</form>

<hr>

<a href="{{ route('carros.create') }}">Regresar a la lista</a>