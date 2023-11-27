<?php
require_once(__DIR__ . "/../controller/vaccine.controller.php");
require_once(__DIR__ . "/../Connection.php");


if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $id_new=$_POST['id'];
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : "";

    $new = new Vaccine_Controller;
    $vacuna= new Vaccine();

    $vacuna->id=$id_new;
    $vacuna->name=$nombre;

    $result= $new->update($vacuna);
    if ($result){
        header("location: ../crud.php");
    }else{
        echo "MALO";
    }
}
?>
