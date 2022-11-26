<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>:: Agregar Persona ::</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <a href="../index.php" class="btn btn-outline-primary btn-sm">Inicio</a>
                <h1>Formulario para el Ingreso de Personas</h1>
                <form action="guardar.php" method="post">
                    <div class="form-group">
                        <label for="primer_nombre">Primer Nombre</label>
                        <input type="primer_nombre" class="form-control" id="primer_nombre" aria-describedby="primerNombreHelp" placeholder="Ingrese Primer Nombre">
                    </div>
                    <div class="form-group">
                        <label for="segundo_nombre">Segundo Nombre</label>
                        <input type="segundo_nombre" class="form-control" id="segundo_nombre" aria-describedby="segundoNombreHelp" placeholder="Ingrese Segundo Nombre">
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer Apellido</label>
                        <input type="primer_apellido" class="form-control" id="primer_apellido" aria-describedby="primerApellidoHelp" placeholder="Ingrese Primer Apellido">
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido</label>
                        <input type="segundo_apellido" class="form-control" id="segundo_apellido" aria-describedby="segundoapellidoHelp" placeholder="Ingrese Segundo Apellido">
                    </div>
                    <div class="form-group">
                        <label for="sexoSelect">Sexo</label>
                        <select class="form-control" id="id_sexo">
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ciudadSelect">Ciudad</label>
                        <select class="form-control" id="id_ciudad">
                            <option value="1">BOGOTÁ D.C.</option>
                            <option value="2">SANTIAGO DE CALI</option>
                            <option value="3">MEDELLÍN DE ANTIOQUIA</option>
                            <option value="4">SAN JOSÉ DEL GUAVIARE</option>
                            <option value="5">PANURÉ</option>
                        </select>
                    </div>
                    <input type="button" class="btn btn-outline-primary btn-sm" value="Guardar">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>