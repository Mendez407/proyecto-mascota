<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETERINARIA.COM</title>
    <link rel="stylesheet" href="css/style-registro.css">
    <link rel="icon" href="imagenes/icono.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="formulario">
        <?php
        require_once __DIR__ . "/procesos/validacion_registro.php";
        ?>
        <div class="titulo">
            <p>BIENVENIDO</p>
            <hr>

        </div>
        <form method="post" action="">
            <div>
                <i class='bx bxs-user'></i>
                <input type="text" name="user" placeholder="User" id="barra2" required>
            </div>

            <div>
                <i class='bx bxs-user'></i>
                <input type="text" name="username" placeholder="Username" id="barra2" required>
            </div>
            <div>
                <i class='bx bxl-gmail'></i>
                <input type="email" name="email" placeholder="Email" id="barra2" required>
            </div>
            <div>
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="password" placeholder="Password" id="barra2" required>
            </div>
            


            <div class="ingreso_login">
                <input type="submit" name="boton_login" value="REGISTRARSE" class="login">
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

// require_once(__DIR__."./controller/user.controller .php");

// if(isset($_POST['user']) && isset($_POST['username']) && isset($_POST['gmail']) && isset($_POST['password']) && isset($_POST['submit'])){
//     $hola = new User_Controller();
//     $hola->create();
// }
?>