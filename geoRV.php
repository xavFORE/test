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

require_once "geoLibRV.php";


$p1 = new Point( 12, 5 );
// creation Point 12,5
$c1 = new Carre( 3, 15, 100, "yellow");
// creation Carré 3, 15, 100

$c2 = new Carre( -3, -15, 50, "black");
$c3 = new Carre( 30, 150, 10, "orange");
$c4 = new Carre(70, 250, 70, "blue"); 

$f1 = new Foto(150, 200, 50, "white", "images/av1.jpeg");

$l1 = new Lien("#");


$c1 = move(30, 0);

$p = new Page();
// creation de la page


$p->addFigure( $c1 );
$p->addFigure( $c2 );
$p->addFigure( $c3 );
$p->addFigure( $c4 );

$p->addFigure( $f1);

$p->addFigure( $l1);

$p->affiche();


?>
</body>
</html>