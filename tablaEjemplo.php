<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
    <script>
        $(document).ready(function() {
            function cargarDatos() {
                $.ajax({
                    url: "https://befuddled-ratios.000webhostapp.com/rest.php",
                    method: "GET",
                    dataType: "json",
                    success: function(data) {
                        var tableBody = $(".tabla tbody");
                        tableBody.empty(); // Limpiar contenido anterior de la tabla
                        $.each(data, function(index, item) {
                            var row = $("<tr></tr>");
                            row.append("<td>" + item.cedula + "</td>");
                            row.append("<td>" + item.nombre + "</td>");
                            row.append("<td>" + item.apellido + "</td>");
                            row.append("<td>" + item.edad + "</td>");
                            tableBody.append(row);
                        });
                    },
                    error: function() {
                        console.log("Error al cargar los datos.");
                    }
                });
            }
            cargarDatos();
            //
        });
    </script>
</head>

<body>
    <button id="editar" type="button" class="btn btn-primary">EDITAR</button>
    <table class="table table-striped tabla">
        <thead>
            <tr>
                <th scope="col">CEDULA</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">EDAD</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</body>

</html>