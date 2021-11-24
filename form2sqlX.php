<?php

    if ( $_GET )
    {
        $maValeur = $_GET[ "carouf" ];
        print( "la valeur du champ : $maValeur<br> ");
        

        exit(0);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="GET">
    <input type="text" placeholder="saisir nom" name="carouf" >
    <button type="submit">OK</button>
</form>


</body>
</html>