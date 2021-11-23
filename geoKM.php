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

        .photot
        {
            width: 100px;
            height:auto;
        }

    </style>
</head>
<body>

<?php

require_once "geoLibKM.php";


$p1 = new Point( 12, 5 );
// creation Point 12,5
$c1 = new Carre( 500, 400, 100, "yellow");
// creation Carré 3, 15, 100

$c2 = new Carre( 400, 350, 50, "black");
$c3 = new Carre( 30, 150, 10, "orange");
$c4 = new Carre( 70, 250, 100, "red");
$t5 = new Text( 70, 500, 100, "blue", " toto va à la plage" );
$ph1 = new Text( 70, 800, 100, "blue", "<img src='images/av1.jpeg'>" );
$ph2 = new Photo( 400, 400, 100,  "images/av1.jpeg" );

$p = new Page();
// creation de la page


$p->addFigure( $c1 );
$p->addFigure( $c2 );
$p->addFigure( $c3 );
$p->addFigure( $c4 );
$p->addFigure( $t5 );
$p->addFigure( $ph2 );

$p->affiche();

?>

<img src="" alt="">
</body>
</html>