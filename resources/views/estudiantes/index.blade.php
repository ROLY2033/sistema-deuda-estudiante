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
            Inicio estudiantes
        </h1>
        <table>
            <a href="{{route('estudiante.create')}}">agregar estudiante</a>
            <thead>
                <th>id</th>
                <th>Nombre Estudiante</th>
                <th>Pago</th>
                <th>Deuda</th>
                <th>Monto</th>
            </thead>
            @foreach ( $estudiantes as $estudiante)
                <tbody >

                        <td>{{$estudiante->id}}</td>
                        <td>{{$estudiante->name}}</td>
                        <td>{{ $estudiante->montoPago}}</td>
                        <td style="color: #ff2222; font-family: serif;">{{$totalPago - $estudiante->montoPago}}</td>
                        <td>{{$totalPago}}</td>
                        <td>
                            @csrf
                            <form action="{{route('estudiante.edit', $estudiante->id)}}">
                                <input style="cursor: pointer; background: green; border: 50px; padding: 2px 5px 2px 5px; color: white" type="submit" value="editar">
                            </form>

                            <form action="{{route('estudiante.destroy', $estudiante->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input style="cursor: pointer; background: red; border: 50px; padding: 2px 5px 2px 5px; color: white" type="submit" value="Eliminar">

                            </form>
                        </td>
                </tbody>
            @endforeach
        </table>
</body>
</html>
