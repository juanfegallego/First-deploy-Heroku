<?php
function conectar(){
$mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306", "b2f605a0b9a98f","9c08fb0d", "heroku_c226b0ef336add9");
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

return $mysqli;

}

?>