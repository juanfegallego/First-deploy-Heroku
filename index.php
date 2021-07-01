<h1> Lista de Platos </h1>

<?php

//conexio con base de datos

require './database/db_connect.php';
$mysqli = conectar();

//consulta BBDD
$resultado = $mysqli->query("SELECT id, titulo FROM plato");

//Imprime resultado
echo '<ol>';
while ($reg = $resultado->fetch_assoc()) {
    echo '<li>';
    echo '<a href="https://first-deploy-php-restaurant.herokuapp.com/detalle.php?id='. $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a>';
    echo '</li>';
}
echo '</ol>';

?>