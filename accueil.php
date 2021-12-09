<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "ressources.php";
        require_once "fonctions.php";
        
        session_start();
        $nom = $_SESSION[ 'nom' ];
        $id = $_SESSION[ 'id' ];
        $dateNaiss = $_SESSION[ 'dateNaiss' ]; 

        $res = query( 
            "select livres.nom, livres.id from livres, emprunts
            where emprunts.ide=$id and livres.id=emprunts.idl and emprunts.dateFin is NULL;"
                    );
        
        $tableau = [];
        while($ligne = $res->fetch_assoc())
        {
                
                $tableau[] = $ligne;
        }
        affTab( $tableau  );
    ?>

coucou <?=$nom?> 



</body>
</html>