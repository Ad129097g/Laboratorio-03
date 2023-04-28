<?php
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];

    /*echo $usuario .', '. $password*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
</head>
<body>
    <div class="container">
        <div class="row">

            <h1>Bienvenido</h1>
                <?php    echo "<p>Usuario: ".$usuario ."<br>  Correo: " . $email ."</p>";?>
                <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
                    <a href= 'calculadora.html' class= 'btn btn-primary'> Ir a calculadora</a>
                    <a href= 'ejercicio2.html' class= 'btn btn-success'> Ir a ejercicio 2</a>
                    <a href= 'ejercicio3.html' class= 'btn btn-warning'> Ir a ejercicio 3</a>
                    <a href= 'ejercicio4.html' class= 'btn btn-danger'> Ir a ejercicio 4</a>
                </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>
</html>
