<?php

include("../config/config.php");
$id = $_GET ["id"] ;

try {
    $requette = 'DELETE  FROM ouvriers WHERE id_ouvriers = :id';
$statement = $connection ->prepare($requette);
$execution = $statement -> execute(array(':id'=> $id));
if ($execution) {
    header('Location:../view/ouvrier.php');
}
} catch (PDOException $th) {
        echo ''. $th->getMessage() .'';
}