<h1>BIENVENIDOS <br>VETERINARIA AMIGOS FELICES</h1>
<h2>ES UN PLACER CONTAR CON SU PRESENCIA</h2>
<?php
require_once __DIR__ . "/vendor/autoload.php";
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once(__DIR__ . '/Connection.php');

$conn = (new Connection) -> connect();
if (!($conn->connect_errno)) {
    header("location: principal");
    die();
} else {
    echo "error en la conexion";
}
?>

