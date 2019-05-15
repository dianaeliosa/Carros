@if ($errors->any())

  <ul>

    @foreach($errors->all() as $error)

      <li>{{ $error }}</li>

    @endforeach

  </ul>

@endif


<form action="{{ route('carros.update', $carro) }}" method="post">

  @csrf
  @method('put')

  <label for='marca'>Marca: </label>
  <input type="text" name="marca" value="{{ old('marca', $carro->marca) }}">

  <label for='modelo'>Modelo: </label>
  <input type="number" name="modelo" value="{{ old('modelo', $carro->modelo) }}">

  <label for='color'>Color: </label>
  <input type="text" name="color" value="{{ old('color', $carro->color) }}">

  <input type="submit" value="Guardar">


</form>

<a href="{{ route('carros.create') }}">Registar carro</a>
