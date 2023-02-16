<!DOCTYPE html>
<html lang="es">

<head>

    <title>Agenda UNACH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="https://fca.unach.mx/images/logo_facultad.png">
    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">

</head>
<?php

    include 'conexion.php';
    $conexion = new conexion_db();
    $conexion->creaconexion();

?>

<body>
    
    <div class="login">

        <h1 class="text-center">Hola otra vez!</h1>
        
        <form class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Dirección de correo electronico</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Constraseña</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <input class="btn btn-success w-100" type="submit" value="SIGN IN">
        </form>

    </div>

</body>

</html>