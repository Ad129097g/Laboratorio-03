<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['ejecutar'];
    $resultado = '';
    $suma = $numero1 + $numero2;
    $diferencia= $numero1 - $numero2;
    $producto = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    $validar = $numero2 != 0;

    if($numero2 != 0 ){
        if($numero1 > $numero2){
            $resultado = "la suma es " .$suma. ", y la diferencia " .$diferencia;
        }
        else{
             $resultado = "el producto es " .$producto. ", y la division " .$division;
        }
    } 
    else{
       $resultado = "el segundo numero no puede ser 0";
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
    <h1>El resultado es: <?php echo $resultado?></h1>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>
</html>