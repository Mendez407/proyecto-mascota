<?php
include("Connection.php");
include("controller/vaccine.controller.php");
include ("controller/vaccine.controller.php");
include("procesos/vacuna_update.php");
$my = new Connection();
$my = $my->connect();

$id = $_GET["id"];
$sql = $my->query("SELECT * FROM vacuna WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/vacuna_update.css">
</head>

<body>
    <form action="" method="post" class="modal">
        <div class="actualizar_bloque">
            <p>MODIFICAR VACUNA</p>
            <label for="">NOMBRE DE LA VACUNA</label>

            <div class="boton">
                <input type="text" id="" name="new_nombre">
            </div>
            <button type="submit" name="vacuna_actualizar" onclick="update()">ENVIAR</button>
        </div>

    </form>

    <script src="main.js"></script>
</body>

</html>