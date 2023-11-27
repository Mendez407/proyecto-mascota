<?php
require_once(__DIR__."/../Connection.php");
require_once(__DIR__."../../model/pet.model.php");

class pet_Controller{
    public function create(pet $modelpet) 
    {

        session_start();
        $tod = new Connection();
        $tod = $tod->connect(); 

        $name  = $modelpet -> name = $tod-> real_escape_string($_POST['name']);
        $date  = $modelpet -> BirthDate =  ($_POST['date']);
        $id_user = $_SESSION['id'];
        $id_tipo =$modelpet -> tipomascota_id = ($_POST['tipo']);
        $id_raza = $modelpet -> raza_id = ($_POST['raza']);
        
        $sql = "INSERT INTO mascota (nombre,FechaNacimiento,foto,User_id,TipoMascota_id,Raza_id) VALUES ('$name','$date','null','$id_user','$id_tipo','$id_raza')";
        $result = $tod -> query($sql);

        // if (mysqli_num_rows($result)> 0) {
        //     echo "Registro creado con exito";
        // }
        // if   {
        // echo "<div class='messageRegister'>Registro creado con exito</div>";
        // }
        $tod -> close();
        // }
        // else {
            // echo "No se pudo crear registro";
        // }
        // $mysqli->close();
    }

    public function read() {
        session_start();
        $mysqli = (new Connection);
        $mysqli = $mysqli->connect();
        $array = [];
        $sql = "select * from mascota";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            while ($list = $result->fetch_assoc()) {
                $pet = new pet();
                $pet->id = $list["id"];
                $pet->name = $list["nombre"];
                $pet->BirthDate = $list["FechaNacimiento"];
                $pet->user_id = $list["User_id"];
                $pet->tipomascota_id = $list["TipoMascota_id"];
                $pet->raza_id = $list["Raza_id"];
                $array[] = $pet;
            }
        }
        return $array;
    }

    public function update($name,$date,$id_new) {
        $mysqli = new Connection();
        $mysqli = $mysqli->connect();
        $sql = "UPDATE mascota SET nombre ='$name', FechaNacimiento ='$date' WHERE id = $id_new ";
    
        if($mysqli->query($sql)==true) {
            echo"REGISTRO ACTUALIZADO CON EXITO";

        }else{
            echo "ERROR EN EL PROCESO DE ACTUALIZAR ";
        }
        $mysqli->close();
    }

    public function delete(pet $pet) {
        $mysqli = new Connection();
        $mysqli = $mysqli->connect();
        $sql = "DELETE FROM mascota WHERE id ={$pet->id}";
        $result = $mysqli->query($sql);
        return $result;
    }
    
}
?>