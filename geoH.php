<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Document</title>
    <style>
        .figure
        {
            position: absolute;
        
        }
        .foto
        {
        
          width : 100%;
          height: 100%;
        }
    

    </style>
</head>
<body>

<?php

require_once "geoLibH.php";


$p1 = new Point( 12, 5 );                          // creation Point 12,5
$c1 = new Carre( 150, 150, 200, "red");       // creation Carré 3, 15, 100
$c2 = new Carre( 30, 300, 100, "green");
$c3 = new Carre( 150, 400, 150, "blue");
$p = new Page();                            // creation de la page
$f1 = new foto( 150, 150, 200, "pink","images/av5.png");
$t1 = new Text( 10, 200, 60, "red", "bonjour toto");
$l1 = new lien( 10, 150, 100,"geoH.php ");

$p->addFigure( $c1 );
$p->addFigure( $c2 );
$p->addFigure( $c3 );
$p->addFigure( $t1 );
$p->addFigure( $f1 );
$p->addFigure( $l1 );
$p->affiche();

?>
</body>
</html>