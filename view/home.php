<?php
session_start();
include("../config/config.php");


$requette  = "SELECT
    (SELECT COUNT(*) FROM ouvriers ) AS ouvriersNumber,
    (SELECT COUNT(*) FROM ingenieurs) AS ingenieursNumber";
$statement = $connection ->prepare($requette);
$execution = $statement->execute();

if($execution){
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $ouvrierNumber = $row['ouvriersNumber'];
    $ingenieurs = $row['ingenieursNumber'];
    $totalAgents = $ouvrierNumber + $ingenieurs;
}

function genieInformatique($connection){
    try {
        $typeOuvrier = 'Ouvrier';
        $typeIngenieur = 'Ingenieur';
        $domaine = 'Genie Informatique';
        $result = [];
        $requette = "SELECT
        (SELECT COUNT(*) FROM ouvriers WHERE type_agent = :type_ouvrier AND domainr = :domaine) AS ouvriersNumber,
        (SELECT COUNT(*) FROM ingenieurs WHERE type_agent = :type_agent AND domainr = :domaine) AS ingenieursNumber";
    
        $statement = $connection->prepare($requette);
        $execution  = $statement->execute([
            ':type_ouvrier' => $typeOuvrier,
            ':type_agent'=> $typeIngenieur,
            ':domaine' => $domaine
        ]);
    
    
        if ($execution) {
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            $ouvrierNumber = $row['ouvriersNumber'];
            $ingenieursNumber = $row['ingenieursNumber'];
            $result = [$ouvrierNumber ,$ingenieursNumber];
            return $result;
            
        }
    } catch (PDOException $th) {
       echo ''. $th->getMessage();
    }
}


function genieCivil($connection){
    try {
        $typeOuvrier = 'Ouvrier';
        $typeIngenieur = 'Ingenieur';
        $domaine = 'Civil';
        $result = [];
        $requette = "SELECT
        (SELECT COUNT(*) FROM ouvriers WHERE type_agent = :type_ouvrier AND domainr = :domaine) AS ouvriersNumber,
        (SELECT COUNT(*) FROM ingenieurs WHERE type_agent = :type_agent AND domainr = :domaine) AS ingenieursNumber";
    
        $statement = $connection->prepare($requette);
        $execution  = $statement->execute([
            ':type_ouvrier' => $typeOuvrier,
            ':type_agent'=> $typeIngenieur,
            ':domaine' => $domaine
        ]);
    
    
        if ($execution) {
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            $ouvrierNumber = $row['ouvriersNumber'];
            $ingenieursNumber = $row['ingenieursNumber'];
            $result = [$ouvrierNumber ,$ingenieursNumber];
            return $result;
            
        }
    } catch (PDOException $th) {
       echo ''. $th->getMessage();
    }
}

function genieElec($connection){
    try {
        $typeOuvrier = 'Ouvrier';
        $typeIngenieur = 'Ingenieur';
        $domaine = 'Electicite';
        $result = [];
        $requette = "SELECT
        (SELECT COUNT(*) FROM ouvriers WHERE type_agent = :type_ouvrier AND domainr = :domaine) AS ouvriersNumber,
        (SELECT COUNT(*) FROM ingenieurs WHERE type_agent = :type_agent AND domainr = :domaine) AS ingenieursNumber";
    
        $statement = $connection->prepare($requette);
        $execution  = $statement->execute([
            ':type_ouvrier' => $typeOuvrier,
            ':type_agent'=> $typeIngenieur,
            ':domaine' => $domaine
        ]);
    
    
        if ($execution) {
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            $ouvrierNumber = $row['ouvriersNumber'];
            $ingenieursNumber = $row['ingenieursNumber'];
            $result = [$ouvrierNumber ,$ingenieursNumber];
            return $result;
        }
    } catch (PDOException $th) {
       echo ''. $th->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <div class="employees grid">
                <div class="employees-number flex">
                    <div class="number-emplo flex">
                        <span class="number"><?php echo $totalAgents?></span>


                    </div>
                    <div class="illustrations">
                        <img src="../img/3d-business-people-at-a-construction-site.png" alt="">
                       
                    </div>
                </div>
             
                <div class="services-numbers">
                <div class="service">
                        <div class="info">
                            <div class="name">Batimenent</div>
                            <div class="number-image">
                                <div class="icon-illustration"><img src="../img/icons8-engineer-48.png" alt=""></div>
                                <div class="number"><?php echo genieCivil($connection)[1] ?> Ingenieurs</div>
                            </div>
                           <div class="number-image">
                                <div class="icon-illustration"><img src="../img/icons8-mechanic-skin-type-3-48.png" alt=""></div>
                                <div class="number"><?php echo genieCivil($connection)[0]?> Ouvriers</div>
                           </div>
                        </div>
                        <div class="icon"><img src="../img/icons8-arrow-right-50.png" alt=""></div>
                    </div>
                    <div class="service">
                        <div class="info">
                            <div class="name">Informatique</div>
                            <div class="number-image">
                                <div class="icon-illustration"><img src="../img/icons8-engineer-48.png" alt=""></div>
                                <div class="number"> <?php echo genieInformatique($connection)[1] ?> Ingnieurs</div>
                            </div>
                            <div class="number-image">
                                <div class="icon-illustration"><img src="../img/icons8-mechanic-skin-type-3-48.png" alt=""></div>
                                <div class="number"><?php echo genieInformatique($connection)[0] ?> Ouvriers</div>
                            </div>
                        </div>
                        <div class="icon"><img src="../img/icons8-arrow-right-50.png" alt=""></div>
                    </div>
                    <div class="service">
                        <div class="info">
                            <div class="name">Electricite</div>
                            <div class="number-image">
                                 <div class="icon-illustration"><img src="../img/icons8-engineer-48.png" alt=""></div>
                                <div class="number"><?php echo genieElec($connection)[1] ?> Ingenieurs</div>
                            </div>
                            <div class="number-image">
                                <div class="icon-illustration"><img src="../img/icons8-mechanic-skin-type-3-48.png" alt=""></div>
                                <div class="number"><?php echo genieElec($connection)[0]?> Ouvriers</div>
                            </div>
                        </div>
                        <div class="icon"><img src="../img/icons8-arrow-right-50.png" alt=""></div>
                    </div>
                   
                </div>
            </div>
            <!-- <div class="holly-days flex">
                <div class="onHollyday">
                   <table>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Postnom</th>
                                <th>Prenom</th>
                                <th>Position</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                   </table>
                    
                </div>
                <div class="upcoming">
                    <table>
                        <thead>
                            <th>Nom</th>
                            <th>Postnom</th>
                            <th>Prenom</th>
                            <th>Position</th>
                           
                        </thead>
                        <tbody>

                        </tbody>
                   </table>
                </div>
            </div> -->
        </div>
    </div>
        
</body>
</html>
