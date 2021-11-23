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

$c1 = new Carre( rand(5,600), rand(5,600), rand(50,450), "yellow");
$c2 = new Carre( rand(5,600), rand(5,600), rand(50,450), "black");
$c3 = new Carre( rand(5,600), rand(5,600), rand(50,450), "orange");
$c4 = new Carre( rand(5,600), rand(5,600), rand(50,450), "red");

$i1 = new Photo( rand(5,600), rand(5,600), rand(50,450), "https://www.pierre-giraud.com/wp-content/uploads/2019/11/php-mysql-livre-couverture.png" );
$i2 = new Photo( rand(5,600), rand(5,600), rand(50,450), "https://img-19.ccm2.net/cI8qqj-finfDcmx6jMK6Vr-krEw=/1500x/smart/b829396acc244fd484c5ddcdcb2b08f3/ccmcms-commentcamarche/20494859.jpg", "grey" );

$l1 = new Lien( 150, 200, 55, "geoM.php", "Premier lien", "green" );

$p = new Page();

$p->addFigure( $c1 );
$p->addFigure( $c2 );
$p->addFigure( $c3 );
$p->addFigure( $c4 );
$p->addFigure( $i1 );
$p->addFigure( $i2 );
$p->addFigure( $l1 );

# $i2->move( 600, 300 );

$p->affiche();

?>

</body>
</html>