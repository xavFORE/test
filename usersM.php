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

    if ($_POST)
    {
        $nom = $_POST[ 'nom' ];
        $pw = $_POST[ 'pw' ];
        $idDep = $_POST[ 'departement' ];

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        
        $query  = "insert into users ( nom, pw, age, pwhash, idDep ) values( '$nom', '$pw', 20, '".md5($pw)."',$idDep );";
        print( $query );
        $res = $mysqli->query( $query );
        $mysqli->close();
        print( "<h3>$nom enregistré</h3>");
    }
?>


<form action="#" method="POST"> 
<input type="text" name='nom' placeholder="ton nom">
<br>
<input type="text" name='pw' placeholder="ton pw">
<br>
Monsieur<input type="checkbox" name='mr'>
<br>
Madame<input type="checkbox" name='mme'>
<br>

<select name="departement">
<?php
    require_once "ressources.php";
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $query  = "select * from departement;";
    $res = $mysqli->query( $query );
    while(  ($ligne = $res->fetch_assoc()) )
    {
        $id  = $ligne[ 'departement_code' ];
        $nom = $ligne[ 'departement_nom' ];
        print( "<option value=$id>".utf8_encode($nom)."</option>\n" );
    }
    $mysqli->close();
?>    
</select> 
<br>
<button type="submit">OK</button>
</form>
</body>
</html>