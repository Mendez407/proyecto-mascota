<?php
include_once(__DIR__."/../Connection.php");
include_once __DIR__."/../controller/pet.controller.php" ;
include_once __DIR__."/../model/pet.model.php" ;

if(isset($_POST['boton_login'])){
    $mysqli = (new Connection) -> connect();
    $name = $mysqli -> real_escape_string($_POST['name']);
    $date = $mysqli -> real_escape_string(($_POST['date']));
    // $petdate = $mysqli -> real_escape_string($_POST['date']); or FechaNacimiento = '$petdate' 
    // $mysqli = Connection::connect();
    $sql = "select * from mascota where nombre = '$name' and FechaNacimiento ='$date'";
    $result = $mysqli -> query($sql);
    // $modelpet = new pet;
    // (new pet_Controller) -> create($modelpet);
    // header("location:sesion-user.php");
    if(mysqli_num_rows($result) > 0){        
        echo "<div class='MessageRegister'>Datos en uso</div>";
    }else{
        $modelpet = new pet;
        (new pet_Controller) -> create($modelpet);
        header("location:registro_pet.php");
    }
    // $tod->close();
}

?> 