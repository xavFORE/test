<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="#">
        <label>Voitures :</label><br><br>
        <select name="voitures">
            <option value="" selected="select">Choisissez une voiture</option>
            <option value="1">Ford T</option>
            <option value="2">2CV</option>
            <option value="3">Juva 4</option>
            <option value="4">Renault 4</option>
        </select>
        <input value="Valider" type="submit">
    </form>
    <br>

<?php
    require_once "ressources.php";

    if ( $_POST )
    {
        if(!empty($_POST['voitures']))
        {
            $selected = $_POST['voitures'];
            
            $mysqli = new mysqli($servername, $username, $password, $dbname);

            if ($mysqli -> connect_error) {
                die("Failed to connect to MySQL : " . $mysqli -> connect_error);
                exit();
            }
            
            $query = "SELECT * FROM voitures WHERE id='".$selected."';";
            $resultat = $mysqli->query($query);

            $ligne = $resultat->fetch_assoc();
            
            print( "Marque : ".$ligne['nom']."<br>Année : ".$ligne['annee']."<br>Puissance : ".$ligne['puissance']."<br>Kilométrage : ".$ligne['kilometrage']."<br>Prix : ".$ligne['prix']."<br><br>\n");

            $mysqli->close();
        }
            else
                print("Veuillez choisir une voiture !<br><br>");
    }
?>

</body>
</html>