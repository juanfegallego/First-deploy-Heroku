<?php
function conectar(){
$mysqli = new mysqli("localhost:33066", "root","", "DB_php");
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

return $mysqli;

}

?>