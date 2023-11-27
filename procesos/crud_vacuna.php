<?php
include_once(__DIR__ . "/../Connection.php");
include_once __DIR__ . "/../controller/vaccine.controller.php";
include_once __DIR__ . "/../model/vaccine.model.php";




if (isset($_POST['vacuna']) && isset($_POST['nombre']) != "") {
    $modelVaccine = new Vaccine;
    (new Vaccine_Controller)->create($modelVaccine);
    header("location:../crud.php");
}







