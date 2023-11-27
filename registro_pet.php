<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETERINARIA.COM</title>
    <link rel="stylesheet" href="css/registro_pet.css">
    <link rel="icon" href="imagenes/icono.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <section class="formulario">
        <?php
        require_once __DIR__ . "/procesos/validacion_registro_pet.php";
        require_once __DIR__ . "/controller/pet.controller.php";
        require_once __DIR__ . "/controller/TypeOfPet.controller.php";
        require_once __DIR__ . "/controller/race.controller.php";
        require_once __DIR__ . "/controller/user.controller.php";
        require_once __DIR__ . "/procesos/delete_pet.php";


        ?>
        <div>
            <div class="titulo">
                <img src="imagenes/icono.jpg" alt="">
            </div>
            <p>BIENVENIDO</p>
            <hr>
        </div>
        <form method="POST" action="">
            <div class="iconos">
                <i class='bx bxs-user'></i>
                <input type="text" name="name" placeholder="Nombre De La Mascota" id="barra" required>
            </div>

            <div class="iconos">
                <i class='bx bxs-calendar'></i>
                <input type="date" name="date" placeholder="BirthDate" id="barra" required>
            </div>
            <select name="tipo" id="">
                <?php
                $result = (new TypeOfPet_controller())->read();
                foreach ($result as $pet) :
                ?>
                    <option value="<?php echo $pet->id ?>"> <?php echo $pet->name ?> </option>
                <?php endforeach; ?>
            </select>
            <select name="raza" id="">
                <?php
                $race = (new Race_controller())->read();
                foreach ($race as $pet) :
                ?>
                    <option value="<?php echo $pet->id ?>"> <?php echo $pet->name ?> </option>
                <?php endforeach; ?>
            </select>

            <div class="ingreso_login">
                <input type="submit" name="boton_login" value="REGISTRARSE" class="login">
            </div>

        </form>

    </section>
    <section class="tabla">
        <table class="table">
            <thead class="tab">
                <tr class="tr">
                    <th>ID</th>
                    <th>MASCOTA</th>
                    <th>TIPO-MASCOTA</th>
                    <th>RAZA-MASCOTA</th>
                    <th>DUEÑO</th>
                    <th>F.NACIMIENTO</th>
                    

                </tr>

            </thead>
            <tbody class="table">

                <?php
                require_once __DIR__ . "/procesos/validacion_registro_pet.php";
                require_once __DIR__ . "/controller/pet.controller.php";
                $tabla = (new pet_Controller())->read();
                $users = (new User_Controller())->read();
                $tipos = (new TypeOfPet_controller())->read();
                $razas = (new Race_controller())->read();
                ?>

                <?php foreach ($tabla as $datos) { ?>
                    <?php
                    $nombre_raza = "";
                    $nombre_user = "";
                    foreach ($razas as $raza) {
                        if ($datos->raza_id == $raza->id) {
                            $nombre_raza = $raza->name;
                            break;
                        }
                    }
                    foreach ($users as $user) {
                        if ($datos->user_id == $user->id) {
                            $nombre_user = $raza->name;
                            break;
                        }
                    }

                    ?>
                    <tr class="table_bloque">


                        <form action="/procesos/update_pet.php" method="post">
                            <th class="id_input"> <?= $datos->id ?><input type="hidden" name="id " value="<?= $datos->id ?>"> </th>

                            <th class="name_input"> <input type="text" name="nombre" value="<?= $datos->name ?>"> </th>
                            <th>
                                <select name="tipo_mascota_id" class="tipo_input">
                                    <?php foreach ($tipos as $tipo) : ?>
                                        <?php $selected = $datos->tipomascota_id == $tipo->id ? 'selected' : ''; ?>
                                        <option value="<?= $tipo->id ?>" <?= $selected ?>>
                                            <?= $tipo->name ?>
                                        </option>
                                    <?php endforeach; ?>
                                    <input type="hidden" name="mascotaOriginal" value="<?= $datos->tipomascota_id ?>">
                                </select>
                            </th>
                            <th>
                                <input type="hidden" name="raza_id" value="<?= $datos->raza_id ?>">
                                <input type="text" name="raza" value="<?= $nombre_raza ?>" >
                            </th>
                            <th>
                                <input type="hidden" name="raza_id" value="<?= $datos->user_id ?>">
                                <input type="text" name="user" value="<?= $nombre_user ?>" >
                            </th>
                            <th>
                                <input type="text" name="birthday" value="<?= $datos->BirthDate ?>">
                            </th>
                            
                            <th class="bum">
                                <input type="submit" value="actualizar">
                            </th>
                            
                        </form>
                        <form action="/../procesos/delete_pet.php" method="post">
                            <th><input type="hidden" name="id" value="<?= $datos->id ?>"></th>
                            <th><input type="submit" value="eliminar" class="botones"></th>
                        </form>

                    </tr>


                <?php } ?>


            </tbody>
        </table>


    </section>

</body>

</html>