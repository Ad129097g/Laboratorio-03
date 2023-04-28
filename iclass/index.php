<?php
    $mensaje = "Bienvenido a nuestra aplicacion";
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
        <div class="row mt-3">
            <h1>
                <?php
                    echo $mensaje;
                ?>
            </h1>
            <h2>
                <?php
                    echo "Desarrollo de aplicaciones en internet"
                ?>
            </h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-tittle text-white">
                        Ingreso
                    </div>
                </div>
                <div class="card-body">
                    <form id="formLogin" method="post" action="bienvenido.php">
                        <div class="form-group">
                            <label>Usuario:</label>
                            <input id="usuario" name="usuario" type="text" class="form control" placeholder="Ingrese su usuario" required> 
                        </div>
                        <div class="form-group mt-3">
                            <label>Email   :</label>
                            <input id="email" name="email" type="email" class="form control" placeholder="Ingrese su email" required> 

                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-secondary col-12">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>
</html>
