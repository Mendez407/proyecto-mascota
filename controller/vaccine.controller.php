<?php
include_once(__DIR__ . "/../Connection.php");
require_once __DIR__ . "../../model/vaccine.model.php";

class Vaccine_Controller
{
    public function create(Vaccine $modelVaccine)
    {
        $my = new Connection();
        $my = $my->connect();

        $name  = $modelVaccine->name = $my->real_escape_string($_POST['nombre']);

        $block = "INSERT INTO Vacuna (nombre) VALUES ('$name')";
        $result = $my->query($block);

        return $result;

        // echo "<div class='messageRegister'>Registro creado con exito</div>";
    }
    // }

    
    public function read()
    {
        $mysqli = (new Connection);
        $mysqli = $mysqli->connect();
        $array=[];
        // $Name = $mysqli -> real_escape_string($_POST['nombre']);
        $sql = "select * from vacuna";
        $result = $mysqli->query($sql);
        if($result->num_rows > 0){
            while($list = $result->fetch_assoc()){
                $vacu = new Vaccine();
                $vacu ->id=$list["id"];
                $vacu ->name=$list["nombre"];
                $array[]=$vacu;
            }
        }
        return $array;
    }

        public function delete(Vaccine $vacuna) {
            $mysqli = new Connection();
            $mysqli = $mysqli->connect();
            $sql = "DELETE FROM vacuna WHERE id ={$vacuna->id} ";
            $result=$mysqli->query($sql);
            return $result;
        }
    
    public function update( Vaccine $vacuna) {
        $mysqli = new Connection();
        $mysqli = $mysqli->connect();
        $sql = "UPDATE vacuna SET nombre = '{$vacuna->name}' WHERE id={$vacuna->id} ";
        $result = $mysqli->query($sql);
        return $result;
    }

}
// if (!empty($_GET['id'])) {
//     $mysqli = new Connection();
//     $mysqli = $mysqli->connect();
//     $id_new = $_GET['id'];
//     $sql =$mysqli->query("DELETE FROM vacuna WHERE id = $id_new");
//     // if ($sql == 1) {
//     //     echo "ELIMINADO CORRECTAMENTE";
//     // } else {
//     //     echo "ERROR";
//     // }
// }

