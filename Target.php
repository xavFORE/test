<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement des données formulaires</title>
</head>
    <body>
        
        <?php

            $prenom = $nom = $pseudo = "";

            function securisation($donnees){
                $donnees=trim($donnees);
                $donnees= stripslashes($donnees);
                $donnees=strip_tags($donnees);
                    return $donnees;
            }
        
            $prenom = securisation($_POST['prenom']);
            $nom = securisation($_POST['nom']);
            $pseudo = securisation($_POST['pseudo']);

            echo 'ton prenom est : '.$prenom.'<br>';
            echo 'ton nom est : ' .$nom .'<br>';
            echo 'pseudo : '.$pseudo;

    
        ?>
            

    

        
    </body>
</html>