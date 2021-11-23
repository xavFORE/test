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

       
    </style>


</head>
<body>

<?php

require_once "geoLibN.php";


$p1 = new Point( 12, 5 );
// creation Point 12,5
$c1 = new Carre( 3, 15, 100, "yellow");
// creation Carré 3, 15, 100

$c2 = new Carre( -3, -15, 50, "black");
$c3 = new Carre( 30, 150, 10, "orange");
$c4 = new Carre( 100, 150, 300, "blue");
$t1 = new Texte( 100, 150, 300, "blue", "Hello Toto");
$f1 = new Image( 100, 150, 300, "images/av1.jpeg");

$p = new Page();
// creation de la page


$p->addFigure( $c1 );
$p->addFigure( $c2 );
$p->addFigure( $c3 );
$p->addFigure( $c4 );
$p->addFigure( $t1 );
$p->addFigure( $f1 );


$p->affiche();

?>
</body>
</html>