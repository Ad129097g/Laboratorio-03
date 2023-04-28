<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $operacion = $_POST['ejecutar'];
    $resultado = '';

    if($numero1 > $numero2 && $numero1 > $numero3){
        $resultado = $numero1;
    }
    elseif($numero2 > $numero1 && $numero2 > $numero3){
         $resultado = $numero2;
    }
    else{
        $resultado = $numero3;
    }
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
    <h1>El numero mayor es: <?php echo $resultado?></h1>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>
</html>