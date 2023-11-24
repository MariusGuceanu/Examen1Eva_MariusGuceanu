<form action="{{ route('manzanas.update') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="tipoManzana">
    <input type="text" name="Precio">
    <button type="submit">Actualizar</button>
</form>
