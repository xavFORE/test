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

        .monimg
        {
            width:100%;
            height:100%;
        }
    </style>
</head>
<body>

<?php

require_once "geoLibM.php";

$p1 = new Point( 12, 5 );
// creation Point 12,5
$c1 = new Carre( 3, 15, 100, "yellow");
// creation Carré 3, 15, 100
$c2 = new Carre( -3, -15, 50, "black");
$c3 = new Carre( 30, 150, 10, "orange");
$c4 = new Carre( 70, 70, 200, "red");
$i1 = new Photo( 150, 150, 250, "https://www.pierre-giraud.com/wp-content/uploads/2019/11/php-mysql-livre-couverture.png" );
$i2 = new Photo( 500, 200, 300, "https://img-19.ccm2.net/cI8qqj-finfDcmx6jMK6Vr-krEw=/1500x/smart/b829396acc244fd484c5ddcdcb2b08f3/ccmcms-commentcamarche/20494859.jpg", "grey" );
$p = new Page();
// creation de la page
$p->addFigure( $c1 );
$p->addFigure( $c2 );
$p->addFigure( $c3 );
$p->addFigure( $c4 );
$p->addFigure( $i1 );
$p->addFigure( $i2 );
# $i2->move( 600, 300 );
$p->affiche();

?>

</body>
</html>