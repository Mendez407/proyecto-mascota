<?php
require_once(__DIR__ . "/../Connection.php");
require_once(__DIR__ . "/../controller/pet.controller.php");


if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $id = $_POST['id'];

    $petController = new pet_Controller();
    $pet = new pet();
    $pet->id = $id;

    $result = $petController->delete($pet);

    if ($result) {
        header ("Location: ../registro_pet.php");
        exit;
    }
}
?>