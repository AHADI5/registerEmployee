<?php
include("../config/config.php");
$nom = $_POST["nom"];
$posnom = $_POST["postnom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$type = $_POST["type"];
$domaine = $_POST['domaine'];
$niveau = $_POST['niveau'];
$taches = $_POST['taches'];
$specialite = $_POST['specialite'];

echo "".$nom."".$posnom."".$prenom."";

try {
    $requette = 'INSERT INTO ouvriers(nom, postnom, prenom,
 adresse, type_agent, domainr, description, niveau, specialite)
 VALUES (:nom, :postnom, :prenom, :adresse, :type_agent, :domainr,
 :description, :niveau, :specialite)';
$statement = $connection ->prepare($requette);
$execution = $statement -> execute([
    ':nom'=> $nom,
    ':postnom'=> $posnom,
    ':prenom'=> $prenom,
    ':adresse'=> $adresse,
    ':type_agent'=> $type,
    ':domainr'=> $domaine,
    ':description'=> $taches,
    ':niveau'=> $niveau,
    ':specialite'=> $specialite,
]);
} catch (PDOException $th) {
    echo ''.$th->getMessage().'';
}

if ($execution) {
    header('Location:../view/ouvrier.php');
} else {
    echo 'failed';
}
