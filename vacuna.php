<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vacuna.css">
    <title>Document</title>
</head>

<body>
<?php
    require_once __DIR__."/procesos/crud_vacuna.php";

?>
    <div class="tabla">
        <form action="" method="post">
            <tr>
                <td>ID</td>
                <td>NOMBRE</td>
            </tr>
            <div class="tabla_bloque">
                <!-- <div>
                    <input type="text">
                </div> -->
                <div>
                    <input type="text" name="nombre">
                </div>
                
            </div>
            <input type="submit" id="click"></input>
        </form>
        
    </div>

</body>

</html>