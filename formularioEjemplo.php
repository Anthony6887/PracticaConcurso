<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            //valida que la cedula sean solo 10 caracteres y sean solo numeros
            //VALIDADOR PARA CEDULA SOLO ADMITA NUMEROS Y 10 CARACTERES
            $("#cedulaI").keypress(function(e) {
                var cedula = $("#cedulaI").val();
                if (cedula.length == 10) {
                    e.preventDefault();
                }
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    e.preventDefault();
                }
            });
            //VALIDADOR PARA NOMBRE SOLO ADMITA LETRAS Y ESPACIOS Y 20 CARACTERES
            $("#nombreI").keypress(function(e) {
                var nombre = $("#nombreI").val();
                if (nombre.length == 20) {
                    e.preventDefault();
                }
                if (e.which != 8 && e.which != 0 && (e.which < 65 || e.which > 90) && (e.which < 97 || e.which > 122) && e.which != 32) {
                    e.preventDefault();
                }
            });
            //VALIDADOR PARA APELLIDO SOLO ADMITA LETRAS Y ESPACIOS Y 20 CARACTERES
            $("#apellidoI").keypress(function(e) {
                var apellido = $("#apellidoI").val();
                if (apellido.length == 20) {
                    e.preventDefault();
                }
                if (e.which != 8 && e.which != 0 && (e.which < 65 || e.which > 90) && (e.which < 97 || e.which > 122) && e.which != 32) {
                    e.preventDefault();
                }
            });
            //VALIDADOR PARA EDAD SOLO ADMITA NUMEROS Y 2 CARACTERES
            $("#edadI").keypress(function(e) {
                var edad = $("#edadI").val();
                if (edad.length == 2) {
                    e.preventDefault();
                }
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    e.preventDefault();
                }
            });
            //VALIDADOR PARA TELEFONO SOLO ADMITA NUMEROS Y 10 CARACTERES
            $("#telefonoI").keypress(function(e) {
                var telefono = $("#telefonoI").val();
                if (telefono.length == 10) {
                    e.preventDefault();
                }
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    e.preventDefault();
                }
            });

        });
    </script>
    <form id="form1">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" name="cedulaI" id='cedulaI'>
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombreI" id='nombreI'>
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellidoI" id='apellidoI'>
        <label for="edad">Edad</label>
        <input type="text" class="form-control" name="edadI" id='edadI'>
        <label for="genero">Genero</label>
        <select class="form-select" aria-label="Default select example" name="generoI" id='generoI'>
            <option selected>Seleccione una opcion</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" name="telefonoI" id='telefonoI'>
        <button type="button" class="btn btn-secondary">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
</body>

</html>