<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../config/config.php");
function ouvrier($connection) {
    $requette = 'SELECT * FROM ouvriers';
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

$ouvrier = ouvrier($connection);



