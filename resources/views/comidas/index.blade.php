<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Comidas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Comidas</h1>
    <button>Agregar comida</button>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            <tbody>
                @foreach($comidas as $comida)

                <tr>
                    <td>{{$comida->nombre}}</td>
                    <td>{{$comida->precio}}</td>
                    <td><button>Editar</button></td>
                </tr>

                @endforeach
            </tbody>
        </thead>
    </table>
</body>
</html>