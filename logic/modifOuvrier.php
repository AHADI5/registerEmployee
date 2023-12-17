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
$id = $_POST['id'];

$requette = 'UPDATE ouvriers SET nom = :nom, postnom = :postnom, prenom = :prenom,
adresse = :adresse, type_agent = :type_agent, domainr = :domainr, description = :description, 
niveau = :niveau, specialite = :specialite  WHERE id_ouvriers = :id ';
$statement = $connection ->prepare($requette);
$execution = $statement -> execute([
    'id' => $id,
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

if ($execution) {
    header('Location:../view/ouvrier.php');
}