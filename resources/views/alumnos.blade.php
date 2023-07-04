<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Listado de alumnos</title>
</head>
<body>   

    
    <div class="row">
        <div class="col-md-2"> </div>
            <div class="col-md-8">
                <h1>Listado de alumnos</h1>

                <div class = "table-responsive">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lstAlumnos as $alumno)
                                <tr>
                                    <td>{{ $alumno->id }}</td>
                                    <td>{{ $alumno->nombre }}</td>
                                    <td>{{ $alumno->apelido }}</td>
                                    <td>{{ $alumno->correo }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        
        
    </div>

    
</body>
</html>