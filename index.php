<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $dui = $_POST['dui'];
        $card = $_POST['card'];
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Expresiones Regulares</title>
</head>

<body>
    <div class="container mx-auto p-5">
        <h1 class="text-center">Este es un ejemplo de expresiones regulares</h1>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 ">
                <div class="card p-4">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center text-dark display-5">Registro de empleado</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold" for="">Nombre</label>
                                    <input type="text" class="form-control" name="name" require>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold" for="">Dui</label>
                                    <input type="text" placeholder="00000000-0" class="form-control" name="dui" require>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold" for="">Numero de tarjeta</label>
                                    <input type="text" placeholder="visa, mastercard, discover sin guión" class="form-control" name="card" require>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="d-grid gap-2">
                                <button type="submit" name="submit" class="btn btn-primary">Validar</button>
                            </div>
                        </div>

                        <?php
                            //Inportamos archivo de validaciones php
                            include("validaciones.php");

                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>