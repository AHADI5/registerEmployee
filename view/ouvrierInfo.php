<?php include("../config/config.php") ?>

<?php
try {
    $id = $_GET ["id"];
$requette = 'SELECT * FROM ouvriers WHERE id_ouvriers = :id';
$statement = $connection ->prepare($requette);
$execution = $statement -> execute([
    'id'=> $id
]);

if ($execution) {
    $data = $statement -> fetchAll(PDO::FETCH_ASSOC);
    
}

} catch (PDOException $th) {
    echo ''. $th->getMessage() .'';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="container grid">
        <div class="menu-content">
            <?php include("./menu.php") ?>
        </div>
        <div class="page-content">
            <div class="title-page">
                <?php include("./title-bar.php");?>
            </div>
            
            <div class="informations-agents flex">
                <div class="informations-Etudes">
                    <div class="title-section">Information Agents</div>
                    <div class="info">Domaine   : <span> <?php echo $data[0]['domainr'] ?></span></div>
                    <div class="info">About     : <span> <?php echo $data[0]['description'] ?></span></div>
                    <div class="info">Niveau    : <span> <?php echo $data[0]['niveau'] ?></span></div>
                    <div class="info">Special   : <span> <?php echo $data[0]['specialite'] ?></span></div>
                </div>
               <div class="informations-perso">
                    <div class="info">Nom       : <span> <?php echo $data[0]['nom'] ?></span></div>
                    <div class="info">Postnom   : <span> <?php echo $data[0]['postnom'] ?></span></div>
                    <div class="info">Prenom    : <span> <?php echo $data[0]['prenom'] ?></span></div>
                    <div class="info">Adresse   : <span> <?php echo $data[0]['adresse'] ?></span></div>
                    <div class="info">Agent     : <span> <?php echo $data[0]['type_agent'] ?></span></div>
               </div>
            </div>
        </div>
    </div>
        
</body>
</html>
