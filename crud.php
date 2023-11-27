<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://kit.fontawesome.com/5a39d57480.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/crud.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<body>
    <?php
    require_once __DIR__ . ("/procesos/crud_vacuna.php");
    ?>
    <section class="body">
        <div class="boton_salir">
            <a href="sesion-user.php"><i class='bx bx-left-arrow-alt' style='color:#fffcfc'></i></a>

        </div>

        <div class="formulario">
            <img src="/imagenes/icono.jpg" alt="" class="titulo">
            <form action="" method="post">
                <div class="formulario_bloque">
                    <label for="" class="form-label">NOMBRE DE LA VACUNA</label>
                    <input type="text" class="" id="" name="nombre">
                    <button type="submit" name="vacuna">ENVIAR</button>
                </div>

            </form>
        </div>

    </section>
    <section>
        <table class="table">
            <thead class="tab">
                <tr class="tr">
                    <th>ID</th>
                    <th>NOMBRE-VACUNA</th>
                    <th></th>
                    <th></th>
                </tr>

            </thead>
            <tbody class="table">
                <?php
                // include "procesos/crud_vacuna.php";
                require_once __DIR__ . ("../controller/vaccine.controller.php");
                require_once __DIR__ . ("/Connection.php");
                $new = (new Vaccine_Controller);
                $result = $new->read();
                ?>
                <?php foreach ($result as $datos) : ?>
                    <tr class="table_bloque">
                        <form method="post" action="/../procesos/update_vacuna.php" class="lineas">
                            <th> <?= $datos->id ?> <input type="hidden" name="id" value="<?= $datos->id ?>"> </th>
                            <th> <input type="text" name="nombre" value="<?= $datos->name ?>"> </th>
                            <th> <input type="submit" value="actualizar" class="botones"></th>
                        </form>
                        <form action="/../procesos/delete_vacuna.php" method="POST">
                            <th><input type="hidden" name="id" value="<?= $datos->id ?>"></th>
                            <th><input type="submit" value="eliminar" class="botones"></th>
                        </form>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    </section>

    <script src="main.js"></script>
</body>

</html>