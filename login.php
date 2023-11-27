<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETERINARIA.COM</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="imagenes/icono.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="formulario">
        <?php
        require_once __DIR__ . "/procesos/validacion_inicio.php";
        ?>
        <div class="titulo">
            <p>BIENVENIDO</p>
            <hr>
        </div>
        <form method="POST" action="">
            <div class="iconos">
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="User" id="barra" name="username">
            </div>

            <div class="iconos">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password" id="barra" name="passwordUser">
            </div>
            <div class="botones">
                <div class="ingreso_login">
                    <input type="submit" name="login_button" value="INICIAR SESIÓN" class="login">
                </div>
                <div class="ingreso_login">
                    <input type="submit" name="boton_login" value="REGISTRARSE" class="login"><a href="registro.php"></a>
                </div>
            </div>


        </form>


    </section>


</body>

</html>

<?php
require_once __DIR__ . "/vendor/autoload.php";

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

?>