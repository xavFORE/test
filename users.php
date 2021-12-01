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
require_once "fonctions.php";

    if ($_GET)
    {
        $nom = $_GET[ 'nom' ];
        $pw = $_GET[ 'pw' ];
        $idDep = $_GET[ 'departement' ];

        $pw = md5( $pw );

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        
        //insert into users ( nom, pw, idDep ) values( "Zorro", "zora", 22 );
        $query  = "insert into users ( nom, pw, idDep ) values( '$nom', '$pw', $idDep );";
        print( $query );
        $res = $mysqli->query( $query );
        $mysqli->close();
        print( "<h3>$nom enregistré</h3>");
    }
?>


<form action="#" method="get"> 
<input type="text" name='nom' placeholder="ton nom">
<br>
<input type="text" name='pw' placeholder="ton pw">
<br>
<input type="text" name='pw' placeholder="ton pw">
<br>

<?php
comboBox( "departement", "select departement_id as id, departement_nom as nom from departement;");
?>    
<br>
<button type="submit">OK</button>
</form>
</body>
</html>