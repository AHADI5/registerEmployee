<?php 
include("../config/config.php");

function ouvrier($connection) {
    $requette = 'SELECT * FROM ingenieurs';
    $statement = $connection ->prepare($requette);
    $execution = $statement -> execute();
    $information = [];
    if ($execution) {
       while ( $data = $statement -> fetch()) {
       $information[] = $data;
        
 }
        return $information;
    } else { return [];}
}

$ingenieurs = ouvrier($connection);