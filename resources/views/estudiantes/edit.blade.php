<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio estudiantes</title>
</head>
<body>
        <h1>
            Es para editar
        </h1>
        <form action="{{route('estudiante.update', $estudiante->id )}}" method="post">
            @csrf
	    @method('PUT')
            <div style="margin: 15px;">
                <label for="">Nombre</label>
                <input type="text" name="name" value="{{ $estudiante->name}}">
            </div>

            <div style="margin: 15px;">
                <label for="">Pago</label>
                <input type="number" name="montoPago" value="{{$estudiante->montoPago}}">
            </div>
            <button style="cursor: pointer; margin-left: 15px; background: green; border: 50px; padding: 2px 5px 2px 5px; color: white">Actualizar</button>
        </form>
</body>
</html>
