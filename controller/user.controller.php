<?php
    require_once(__DIR__."/../Connection.php");
    require_once(__DIR__."../../model/user.model.php");

    class User_Controller{
        public function create(User $modelUser) {

            $mysqli = new Connection();
            $mysqli = $mysqli->connect();

                $name  = $modelUser -> name = $mysqli-> real_escape_string($_POST['user']);
                $username  = $modelUser -> username = $mysqli ->real_escape_string($_POST['username']);
                $email  = $modelUser -> email = $mysqli->real_escape_string($_POST['email']);
                $password  = $modelUser -> password = $mysqli->real_escape_string(password_hash(($_POST['password']), PASSWORD_DEFAULT));

            $sql = "INSERT INTO mydb_base.user (nombre,username,email,password, Role_id,foto) VALUES ('$name','$username','$email','$password','1','null')";
            $result = $mysqli->query($sql);

            // if ($result->num_rows > 0) {
            //     echo "Registro creado con exito";
            // }
            // if (mysqli_num_rows($result) > 0) 
            {
            
            echo "<div class='messageRegister'>Registro creado con exito</div>";
            
            }
            // else {
            //     echo "No se pudo crear registro";
            // }
            $mysqli->close();
        }
        
    //        public function read()
    // {
    //     $mysqli = (new Connection);
    //     $mysqli = $mysqli->connect();
    //     $sql = "SELECT * FROM mascota ";
    //     $result = $mysqli->query($sql);
    //     return $result;
    // }

    public function read()
    {
        $mysqli = (new Connection);
        $mysqli = $mysqli->connect();
        $array = [];

        $sql = "SELECT * from mascota";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            while ($list = $result->fetch_assoc()) {
                $usuario = new User();
                $usuario->id = $list["id"];
                $usuario->name = $list["nombre"];
                $array[] = $usuario;
            }
        }
        return $array;
    }
        // public function update($name, $username, $email,$password,$id_new) {
        //     $mysqli = new Connection();
        //     $mysqli = $mysqli->connect();
        //     $sql = "UPDATE user SET nombre ='$name' , username = '$username' , email = '$email' , password ='$password' WHERE id = $id_new ";
        
        //     if($mysqli->query($sql)==true) {
        //         echo"REGISTRO ACTUALIZADO CON EXITO";

        //     }else{
        //         echo "ERROR EN EL PROCESO DE ACTUALIZAR ";
        //     }
        //     $mysqli->close();
        // }

        // public function delete($id_new) {
        //     $mysqli = new Connection();
        //     $mysqli = $mysqli->connect();
        //     $sql = "DELETE FROM user WHERE id = $id_new";
        //     if($mysqli->query($sql)==true) {
        //         echo"REGISTRO ELIMINADO CON EXITO";

        //     }else{
        //         echo "ERROR EN EL PROCESO DE ELIMINAR ";
        //     }
        //     $mysqli->close();
        // }
    }
?>