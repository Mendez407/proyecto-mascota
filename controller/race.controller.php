<?php
require_once __DIR__ . "/../model/race.model.php";
require_once __DIR__ . "/../Connection.php";

class Race_controller extends Connection{

    public function read(): array {
        
        $mysqli = $this->connect();
        $array = [];
        
        $sql = "SELECT id , nombre FROM raza ";
        $result = $mysqli->query($sql);
        
        while ($list = $result->fetch_assoc()) {
            $vacu = new race;
            $vacu ->id =$list['id'];
            $vacu-> name = $list["nombre"];
            $array[] = $vacu;
        }
        return $array;
    }
}

?>