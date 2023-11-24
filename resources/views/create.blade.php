<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('manzanas.store') }}" method="POST">
        @csrf
        <input type="text" name="tipoManzana" placeholder="Tipo">
        <input type="text" name="precioKilo" placeholder="Precio">
        <button type="submit">Agregar</button>
    </form>
</body>

</html>