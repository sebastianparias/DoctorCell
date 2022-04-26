<?php



session_start();

if (!$_SESSION['usuario']) {
    header("Location: login.php");
}

/*relizando la consulta*/

require "conexion.php";

$conn = conectar();

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);
$datos = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <title></title>
    <style>
        table.dataTable thead {
            background: dodgerblue;
            color: white; 
        }
        body { 
        background-image: url(123.jpg);
        background-repeat: no-repeat;
        background-size: 100%; 
        }
    </style>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel = "stylesheet" href = "tables.css">

</head>

<body>


    <h1 class="text-center" id = "margin"><b>Usuarios</b></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="prueba" class="table-striped table-bordered" style="width: 100%">
                    <thead class="tex-center">
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Celular</th>
                        <th>Contraseña</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $value) {
                        ?>
                            <tr>
                                <td><?php echo $value['codigo'] ?></td>
                                <td><?php echo $value['nombre'] ?></td>
                                <td><?php echo $value['apellido'] ?></td>
                                <td><?php echo $value['celular'] ?></td>
                                <td><?php echo $value['contraseña'] ?></td>
                                <td><?php echo "<button onclick='myFunction()'>Eliminar</button>" ?></td>
                                <td><?php echo "<button onclick='myFunction()'>Modificar</button>" ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>



    <script>
        //Idiomas con el 1er método   
        $(document).ready(function() {
            $('#prueba').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }

            });
        });
    </script>

    <?php

    mysqli_close($conn);

    ?>

</body>

</html>