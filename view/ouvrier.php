<?php include("../logic/ouvrierTable.php") ?>
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
            <div class="ouvrier-liste">
                <div class="title-page flex">
                    <div class="title-text">Ouvriers</div>
                    <div class="actions flex">
                        <a href="./ajouterOuvrier.php"><div class="add-new"> <button class="add">Ajouter</button></div></a>
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
                                for ($i=0; $i < count($ouvrier) ; $i++) {
                                    $id_ouvriers = $ouvrier[$i]["id_ouvriers"];
                                    $nom = $ouvrier[$i]['nom'];
                                    $posnom = $ouvrier[$i]['postnom'];
                                    $prenom = $ouvrier[$i]['prenom'];
                                    $adresse = $ouvrier[$i]['adresse'];
                                    $type_agent = $ouvrier[$i]['type_agent'];
                                    $domainr   = $ouvrier[$i]['domainr'];
                                    $desrciption = $ouvrier[$i]['description'];
                                    $niveau = $ouvrier[$i]['niveau'];
                                    $specialite = $ouvrier[$i]['specialite'];

                                    echo  <<< __END
                                    <tr class="champs">

                                        <td>$id_ouvriers</td>
                                        <td>$nom</td>
                                        <td>$posnom</td>
                                        <td>$adresse</td>
                                        <td>$domainr</td>
                                        <td class = "action-cell flex">
                                            <div class="actions-agents grid">
                                                 <a href="../logic/deleteOuvrier.php?id=$id_ouvriers"><div class="delete flex"><img src="../img/icons8-supprimer.svg" alt=""></div></a>
                                                 <a href="./modifierOuvrier.php?id= $id_ouvriers&nom=$nom&posnom=$posnom&prenom=$prenom&adresse= $adresse &type_agent=$type_agent&domainr=$domainr&description=$desrciption &niveau=$niveau &specialite=$specialite">   <div class="modifier">   <img src="../img/icons8-boîte-modifier-32.png" alt=""></div></a>
                                                 <a href="./ouvrierInfo.php?id=$id_ouvriers"><div class="informations flex"> <img src="../img/icons8-info-48.png" alt=""></div></a>  
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
