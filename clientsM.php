<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="#">
        <label>Clients :</label><br><br>
        <select name="clients">
            <option value="" selected="select">Choisissez un client</option>
            <?php
                require_once "ressources.php";
                
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
                    print( "<option value=$id> $nom</option>\n" );
                }

                $mysqli->close();
            ?>
        </select>

        <select name="departement">
            <option value="" selected="select">Choisissez un departement</option>
            <?php
                require_once "ressources.php";
                
                $mysqli = new mysqli($servername, $username, $password, $dbname);

                if ($mysqli -> connect_error) {
                    die("Failed to connect to MySQL : " . $mysqli -> connect_error);
                    exit();
                }
                
                $query = "SELECT * FROM departement;";
                $resultat = $mysqli->query($query);

                while(  ($ligne = $resultat->fetch_assoc()) )
                {
                    $id  = $ligne[ 'departement_id' ];
                    $nom = $ligne[ 'departement_nom' ];
                    print( "<option value=$id>".utf8_encode($nom)."</option>\n" );
                }

                $mysqli->close();
            ?>
        </select>

        <input value="Valider" type="submit">
    </form>
    <br>
<?php
    if(!empty($_POST['clients']))
    {
        $id = $_POST[ 'clients' ];

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        $query  = "select * from clients where id=$id;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        
        $id          = $ligne[ 'id' ];
        $nom         = $ligne[ 'nom' ];
        $mysqli->close();
        print("Client : ".$nom."<br>");
    }
    else
        print("Veuillez choisir un client !<br>");

    if(!empty($_POST['departement']))
    {
        $id = $_POST[ 'departement' ];

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        $query  = "select * from departement where departement_id=$id;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        
        $id          = $ligne[ 'departement_id' ];
        $code        = $ligne['departement_code'];
        $nom         = $ligne[ 'departement_nom' ];
        $mysqli->close();
        print("Département : ".utf8_encode($nom).'<br>Code Postal : '.$code);
    }
    else
        print("Veuillez choisir un departement !");
?>
</body>
</html>