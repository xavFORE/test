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
        <select name="clients">
            <option value="" selected="select">Choisissez un client</option>
            <?php
                require_once "ressources.php";

                $selected = $_POST['clients'];
                
                $mysqli = new mysqli($servername, $username, $password, $dbname);

                if ($mysqli -> connect_error) {
                    die("Failed to connect to MySQL : " . $mysqli -> connect_error);
                    exit();
                }
                
                $query = "SELECT * FROM clients;";
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

        <select name="voitures">
            <option value="" selected="select">Choisissez une voiture</option>
            <?php
                require_once "ressources.php";

                $selected = $_POST['voitures'];
                
                $mysqli = new mysqli($servername, $username, $password, $dbname);

                if ($mysqli -> connect_error) {
                    die("Failed to connect to MySQL : " . $mysqli -> connect_error);
                    exit();
                }
                
                $query = "SELECT * FROM voitures;";
                $resultat = $mysqli->query($query);

                while(  ($ligne = $resultat->fetch_assoc()) )
                {
                    $id  = $ligne[ 'id' ];
                    $nom = $ligne[ 'nom' ];
                    print( "<option value=$id>".$nom."</option>\n" );
                }

                $mysqli->close();
            ?>
        </select>

        <input value="Valider" type="submit">
    </form>
    <br>
<?php
    if(!empty($_POST['clients']) && !empty($_POST['voitures']))
    {
        $idClient = $_POST[ 'clients' ];
        $idVoiture = $_POST[ 'voitures' ];

        require_once "ressources.php";

        $mysqli = new mysqli($servername, $username, $password, $dbname);

        $query  = "select * from clients where id=$idClient;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nom         = $ligne[ 'nom' ];

        $query  = "select * from voitures where id=$idVoiture;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $marque      = $ligne[ 'nom' ];

        $mysqli->close();
        
        print($nom." à loué une ".$marque."<br>");
    }
    else
        print("Veuillez choisir une location !<br>");
?>
</body>
</html>