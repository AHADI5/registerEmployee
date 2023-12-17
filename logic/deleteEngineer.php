<?php
include("../config/config.php");
$id = $_GET ["id"] ;

$requette = 'DELETE  FROM ingenieurs WHERE id_ouvriers = :id';
$statement = $connection ->prepare($requette);
$execution = $statement -> execute(array('id_ouvriers'=> $id));
if ($execution) {
    header('Location:../view/ingenieur.php');
}