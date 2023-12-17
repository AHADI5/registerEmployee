<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Ouvrier</title>
    <link rel="stylesheet" href="../style.css">
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
            <div class="add-form flex">
               <form action="../logic/ouvriers.php" class ="ouvrierForm flex" method ="post">
                    <div class="info">
                        <div class="informations flex">

                            <div class="informations-perso">
                                <div class="form-title">Information personnelles</div>
                                    <div class="infos">
                                        <div class="nom"><input type="text" name="nom" id="nom" placeholder="Nom"></div>
                                        <div class="postnom">  <input type="text" name="postnom" id="" placeholder = "postnom"></div>
                                        <div class="prenom"><input type="text" name="prenom" id="" placeholder ="Prenom"></div>
                                        <div class="adresse"><input type="text" name="adresse" id="" placeholder ="Adresse"></div>
                                        
                                        <div class="type"> 
                                            <select name="type" id="type">
                                                <option value="Ouvrier">Ouvrier</option>
                                                <option value="Ingenieur">Ingenieur</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="job-informations">
                                    <div class="form-title">Education & Specialite</div>
                                    <div class="infos">
                                        <div class="nom">
                                            <select name="domaine" id="domaine">
                                                <option value="Informatique">Informatique</option>
                                                <option value="Mecanique">Mecanique</option>
                                                <option value="Batiment">Batiment</option>
                                                <option value="Electicite">Electicite</option>
                                            </select>
                                        </div>
                                        <div class="postnom"> 
                                            <select name="niveau" id="niveau">
                                                <option value="Master">Master</option>
                                                <option value="Licence">Licence</option>
                                            </select>

                                        </div>
                                       
                                        <div class="taches">
                                            <textarea name="taches" id="taches"  rows="4" ></textarea>
                                        </div>
                                        
                                        <div class="type"> 
                                          <div class="specialite"><input type="text" name="specialite"  placeholder ="Specialite"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="action flex"> <button class ="save" type="submit">Enregistrer</button></div>
               </form>
                   
            </div>
           
        </div>
    </div>
        
</body>
</html>
