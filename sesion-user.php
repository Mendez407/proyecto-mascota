<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/sesion-user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <title>Document</title>

</head>
<body>
<header>
    <div class="header">
        <?php 
            require_once __DIR__."/procesos/validacion_inicio.php";
        ?>
        <img src="/imagenes/icono.jpg" alt="">
        <div>
            <h1 class="titulo">BIENVENIDO</h1>
            <p></p>
            
        </div>
        <div >
            <i class='bx bx-menu' style='color:#ffffff' onclick="cambiar()"  id="menu"></i>
        </div>
        
    </div>
    <div class="contenedor_menu">
            <div class="menu_list">
                <div>
                
                <i class='bx bx-x' style='color:#ffffff' class="menu_icon" onclick="mostrar()" id="cerrar"></i>
                </div>
                <div>
                    <a href="registro_pet.php"><i class='bx bx-clipboard' style='color:#fff3f3'></i></a>
                    <p>Ingreso de mascota</p>
                </div>
                <div>
                    <a href="crud.php"><i class='bx bxs-injection' style='color:#ffffff'  ></i></i></a>
                    <p>Agregar Vacunas</p>
                </div>
                
            </div>
        </div>
    
</header>
<main>
    
    <!-- <section class="menu">
        
    </section> -->
    <!-- <section class="info">
        <img src="/imagenes/ingreso-mascota.jpg" alt="">
        <div class="info_parrafo">
            <p>ESPERAMOS QUE NUESTROS SERVICIOS SEAN DE GRAN AYUDA PARA EL BIENESTAR DE SUS PELUDOS</p>
            <span>AMIGOS FELICES</span>
            <p>ESTA PRESTO PARA AYUDARTE</p>
        </div>
    </section> -->

</main>

<script src="main.js"></script>
</body>
</html>