<?php
require_once __DIR__ . "/../model/TypeOfPet.model.php";
require_once __DIR__ . "/../Connection.php";

class TypeOfPet_controller extends Connection {

    public function read(): array {
        
        $mysqli = $this->connect();
        $array = [];
        
        $sql = "SELECT id , nombre FROM tipomascota ";
        $result = $mysqli->query($sql);
        
        while ($list = $result->fetch_assoc()) {
            $vacu = new TypeOfPet;
            $vacu ->id =$list['id'];
            $vacu-> name = $list["nombre"];
            $array[] = $vacu;
        }
        return $array;
    }
    
}

?>