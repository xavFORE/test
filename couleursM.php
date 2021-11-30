<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="#"><br>
        <select name="couleurs">
            <option value="" selected="select">Choisissez une couleur</option>
            <?php
                require_once "ressources.php";
                require_once "fonctions.php";
                
                $mysqli = new mysqli($servername, $username, $password, $dbname);

                if ($mysqli -> connect_error) {
                    die("Failed to connect to MySQL : " . $mysqli -> connect_error);
                    exit();
                }
                
                $query = "SELECT * FROM couleurs;";
                $resultat = $mysqli->query($query);

                while(  ($ligne = $resultat->fetch_assoc()) )
                {
                    $id  = $ligne[ 'id' ];
                    $nom = $ligne[ 'nom' ];
                    print( "<option value=$id>$nom</option>\n" );
                }

                $mysqli->close();
            ?>
        </select>
        <input value="Valider" type="submit">
    </form>
    <br>
<?php
    if(!empty($_POST['couleurs']))
    {
        $idCouleurs = $_POST[ 'couleurs' ];

        require_once "ressources.php";
        require_once "fonctions.php";

        $mysqli = new mysqli($servername, $username, $password, $dbname);

        $query  = "select * from couleurs where id=$idCouleurs;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nom         = $ligne[ 'nom' ];

        $mysqli->close();
        
        print("Couleur choisi : ".$nom."<br>");
    }
    else
        print("Veuillez choisir une couleur !<br>");
?>
</body>
</html>