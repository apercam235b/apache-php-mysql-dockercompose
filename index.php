<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Alvaro Perez</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Alvaro Perez Campos</h1>
    <p>Esta página es para un trabajo de SRI.</p>
    
<?php
    $servername = "db";
    $database = "alvarodb";
    $username = "root";
    $password = "departamento";
    $conn = mysqli_connect($servername, $username, $password, $database);

        if( $conn ) {
            echo "Connection established.<br />";
        }else{
            echo "Connection could not be established.<br />";
            #die( print_r( sqlsrv_errors(), true));
    }
    mysqli_close($conn)
?>

</body>
</html>
