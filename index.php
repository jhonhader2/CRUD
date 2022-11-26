<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>::CRUD PERSONAS::</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col mt-3">

                <a href="./Personas/agregar.php" class="btn btn-outline-primary btn-sm">Agregar</a>

                <h1>Listado de Personas</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Fecha Nacimiento</th>
                            <th scope="col" colspan="2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jhon Hader Rodriguez Perdomo</td>
                            <td>Masculino</td>
                            <td>San José del Guaviare</td>
                            <td>30/03/1989</td>
                            <td><button class="btn btn-outline-warning btn-sm">Editar</button></td>
                            <td><button class="btn btn-outline-danger btn-sm">Eliminar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>