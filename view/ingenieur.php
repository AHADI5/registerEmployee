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
                <table class = "liste">
                    <thead>
                        <tr class="champs">
                            <th>Numero</th>
                            <th>Nom</th>
                            <th>Postnom</th>
                            <th>Prenom</th>
                            <th>Tache</th>
                            <th>Contrat</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="champs">
                           
                        </tr>
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
        
</body>
</html>
