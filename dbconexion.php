<?php
$user = "root";
$pass = "";
$host = "localhost";

$connection = mysqli_connect($host, $user, $pass);
if (!$connection) {
    echo "No se ha podido conectar con el servidor" . mysql_error();
}



function conectardb($db)
{
    if (!$db) {
        echo "No se ha podido encontrar la Tabla";
    } else {
        return true;
    }
    ;
}

?>