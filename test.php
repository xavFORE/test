<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<h1>hello php</h1>

<?php

    for(  $i=0 ; $i<5 ; $i++ )
    {
        print(  "ligne $i <br>");
        additionne( $i, 12 );
    }
    


    function additionne(  $p1, $p2 )
    {
        $res = $p1 + $p2;
        print(  "somme : $res<br>");

    }

    $laClasse = [  "toto" , "tata", "célestin" ];


    foreach( $laClasse as $prenom  )
        print(  "bonjour $prenom <br>")






?>




</body>
</html>