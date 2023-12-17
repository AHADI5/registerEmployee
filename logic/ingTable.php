<?php 
include("../config/config.php");
function ouvrier($connection) {
    $requette = 'SELECT * FROM ingenieurs';
    $statement = $connection ->prepare($requette);
    $execution = $statement -> execute();

    if ($execution) {
        $data = $execution -> fetch(PDO::FETCH_ASSOC);
        return $data;
    } else { return [];}
}

$ingenieurs = ouvrier($connection);