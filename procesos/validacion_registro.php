<?php
include_once(__DIR__."/../Connection.php");
include_once __DIR__."/../controller/user.controller.php" ;
include_once __DIR__."/../model/user.model.php" ;

if(isset($_POST['boton_login'])){
    $mysqli = (new Connection) -> connect();
    
    $userName = $mysqli -> real_escape_string($_POST['username']);
    $userEmail = $mysqli -> real_escape_string($_POST['email']);
    // $mysqli = Connection::connect();
    // $mysqli = $this -> connect();
    $sqlNameEmail = "select * from user where username = '$userName' or email = '$userEmail'";
    $result = $mysqli -> query($sqlNameEmail);
    if(mysqli_num_rows($result) > 0){        
        echo "<div class='MessageRegister'>Datos en uso</div>";
        
    }else{
        $modelUser = new User;
        (new User_Controller) -> create($modelUser);
        header("location:principal.php");
    }
    $mysqli->close();
}

?>
