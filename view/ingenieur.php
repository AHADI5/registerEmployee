<?php include("../logic/ingTable.php") ?>
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
            <div class="ouvrier-liste">
                <div class="title-page flex">
                    <div class="title-text">Ingenieurs</div>
                    <div class="actions flex">
                        <a href="./ajouterIngenieur.php"><div class="add-new"> <button class="add">Ajouter</button></div></a>
                        <div class="add-new"> <button class="imprimer">Imprimer</button></div>
                    </div>
                </div>
                <div class="liste-content">
                <table class = "liste">
                    <thead>
                        <tr class="champs">
                            <th>Numero</th>
                            <th>Nom</th>
                            <th>Postnom</th>
                            <th>Adresse</th>
                            <th>Domaine</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                            <?php
                                for ($i=0; $i < count($ingenieurs ) ; $i++) {
                                    $id_ouvriers = $ingenieurs [$i]["id_ouvriers"];
                                    $nom = $ingenieurs [$i]['nom'];
                                    $posnom = $ingenieurs [$i]['postnom'];
                                    $prenom = $ingenieurs [$i]['prenom'];
                                    $adresse = $ingenieurs [$i]['adresse'];
                                    $type_agent = $ingenieurs [$i]['type_agent'];
                                    $domainr   = $ingenieurs [$i]['domainr'];
                                    $desrciption = $ingenieurs [$i]['description'];
                                    $niveau = $ingenieurs [$i]['niveau'];
                                    $specialite = $ingenieurs [$i]['specialite'];

                                    echo  <<< __END
                                    <tr class="champs">

                                        <td>$id_ouvriers</td>
                                        <td>$nom</td>
                                        <td>$posnom</td>
                                        <td>$adresse</td>
                                        <td>$domainr</td>
                                        <td class = "action-cell flex">
                                            <div class="actions-agents grid">
                                                 <a href="../logic/deleteEngineer.php?id=$id_ouvriers"><div class="delete flex"><img src="../img/icons8-supprimer.svg" alt=""></div></a>
                                                 <a href="./modifierEng.php?id= $id_ouvriers&nom=$nom&posnom=$posnom&prenom=$prenom&adresse= $adresse &type_agent=$type_agent&domainr=$domainr&description=$desrciption &niveau=$niveau &specialite=$specialite">    <div class="modifier">   <img src="../img/icons8-boîte-modifier-32.png" alt=""></div></a>
                                                 <a href="./engInfo.php?id=$id_ouvriers"><div class="informations flex"> <img src="../img/icons8-info-48.png" alt=""></div></a>  
                                            </div>
                                        </td>
                                  
                                    </tr>
                                  
                                __END;
                                }
                                ?>
                      
                    </tbody>
                </table>
              </div>
            </div>
           
        </div>
    </div>
        
</body>
</html>
