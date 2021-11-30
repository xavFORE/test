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
require_once "function.php";
    if ($_GET)
    {
        $id = $_GET[ 'voitures' ];
        print($id);
        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from voitures where id=$id;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        
        $id          = $ligne[ 'id' ];
        $nom         = $ligne[ 'nom' ];
        $annee       = $ligne[ 'annee' ];
        $puissance   = $ligne[ 'puissance' ];
        $kilometrage = $ligne[ 'kilometrage' ];
        $prix        = $ligne[ 'prix' ];
        $mysqli->close();

        print( "<h3>$nom</h3> la puisance et $puissance cv l'année et de $annee le kilometrage et de $kilometrage le prix par jour et de $prix <br>");
       
    }
?>


<form action="#" method="get"> 

<?php
combobox("voitures");
?>    

<br>
<button type="submit">OK</button>
</form>
</body>
</html>

