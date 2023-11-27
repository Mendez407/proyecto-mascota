<?php
include_once(__DIR__ . "/../Connection.php");
include_once __DIR__ . "/../controller/user.controller.php";
include_once __DIR__ . "/../model/user.model.php";

if (isset($_POST['login_button'])) {
    $mysqli = (new Connection())->connect();

    if (empty($_POST['username']) && (empty($_POST['passwordUser']))) {
        echo "LOS CAMPOS ESTAN VACIOS";
    } else {
        $userName = $mysqli->real_escape_string($_POST['username']);
        $userPassword = $mysqli->real_escape_string($_POST['passwordUser']);

        $sql = "SELECT * FROM user WHERE username = '$userName'";
        $result = $mysqli->query($sql);
        $cont= mysqli_fetch_array($result);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // $hashedPassword = $row['password'];

            $verify = password_verify($userPassword, $cont['password']);

            if ($verify) {
                session_start();
                $_SESSION['id'] = $cont['id'];
                $_SESSION['username'] = $cont['username'];

                header("location:sesion-user.php");
            } else {
                echo "ACCESO DENEGADO";
            }
        } else {
            echo "ACCESO DENEGADO";
        }
    }
}
if (isset($_POST["boton_login"])) {
    header("location:registro.php");
}
 // $result = $mysqli -> query($sqlpassword);
    // if(mysqli_num_rows($result) > 0){        
    //     echo "<div style='text-align:center; padding:.4vh; background-color:red;'>Datos en uso</div>";
    // }else{

    //     $modelUser = new user;
    //     (new User_Controller) -> create($modelUser);
    // }