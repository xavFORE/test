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
        .fototadapt
        {
            width:100%;
            height:100%;
        }

    </style>
</head>
<body>


<?php

require_once "geoLibOC2.php";


$p1 = new Point( 12, 5 );
// creation Point 12,5
$c1 = new Carre( 3, 15, 100, "yellow");
// creation Carré 3, 15, 100

$c2 = new Carre( -3, -15, 50, "black");
$c3 = new Carre( 30, 150, 10, "orange");

$t1 = new Text( 150, 200, 50, "red", "Hello Toto" );
$t2 = new Text( 100, 100, 50, "red", '<img class="fototadapt" src="images/av1.jpeg">' );
$f1 = new Foto( 150, 200, 50, "images/av1.jpeg" );

$l1 = new Lien( 250, 200, 150, "red", "./geoGraphiqueOC.php" );

$c1->addContent( "bonjour Toto");
//$t2->move( 20, 0);


$p = new Page();
// creation de la page


$p->addFigure( $c1 );
$p->addFigure( $c2 );
$p->addFigure( $c3 );
$p->addFigure( $t1 );
$p->addFigure( $t2 );
$p->addFigure( $f1 );
$p->addFigure( $l1 );

$p->affiche();

?>
</body>
</html>