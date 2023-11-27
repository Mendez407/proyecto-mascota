<?php
require_once(__DIR__ . "/../Connection.php");
require_once(__DIR__ . "/../controller/vaccine.controller.php");


if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $id = $_POST['id'];

    $vaccineController = new Vaccine_Controller();
    $vacuna = new Vaccine();
    $vacuna->id = $id;

    $result = $vaccineController->delete($vacuna);

    if ($result) {
        header ("Location: ../crud.php");
        exit;
    }else{
        echo "malo";
    }
}
?>