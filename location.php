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
        $idV = $_GET[ 'voitures' ];
        $idC = $_GET[ 'clients' ];
        $idco = $_GET[ 'couleurs' ];
        $dateDeb = $_GET['dateDeb'];
        $dateFin = $_GET['dateFin'];

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);


        $query  = "select * from voitures where id=$idV;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nomv         = $ligne[ 'nom' ];
   
        $query  = "select * from clients where id=$idC;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nomc         = $ligne[ 'nom' ];

        $query  = "select * from couleurs where id=$idco;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nomco         = $ligne[ 'nom' ];


        $query = "insert into location ( idC, idV, idco, dateDeb, dateFin )
         values( $idC, $idV, $idco, '$dateDeb','$dateFin');"; 
                    
                            print($query);
        $res=$mysqli->query($query);
        


   
        $mysqli->close();

        print( "<h3>$nomc loue $nomv de couleur $nomco</h3>");
      
    }
?>


<form action="#" method="get"> 
<?php
comboBox("voitures");
comboBox("clients");
comboBox("couleurs");
?>
<br>
<button type="submit">OK</button>
<input type="date" name="dateDeb"></input>
<input type="date" name="dateFin"></input>
</form>



</body>
</html>





