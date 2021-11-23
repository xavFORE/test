<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .figure {
            position: absolute;
            background-size: contain;
        }
        .button {
            padding: 50px;
            background-color: blue;
            border-radius: 50px;
     
  
        }
    </style>
</head>

<body>

    <?php

    require_once "geoLibOC.php";


    $p1 = new Point(12, 5);
    // creation Point 12,5
    $c1 = new Carre(3, 15, 100, "blue");
    // creation Carré 3, 15, 100

    $c2 = new Carre(-3, -15, 50, "black");
    $c3 = new Carre(30, 150, 10, "orange");
    $c4 = new Carre(155, 33, 75, "red");
    $c5 = new Carre(35, 105, 20, "green");

    $p = new Page();
    // creation de la page
    $f1 = new Photo(200, 250, 300, "./images/av1.jpeg");

    $l1 = new Lien(225,650,100,"test()" ,"./geoGraphiqueOC.php");

    $p->addFigure($c1);
    $p->addFigure($c2);
    $p->addFigure($c3);
    $p->addFigure($c4);
    $p->addFigure($c5);

    $p->addFigure($f1);

    $p->addFigure($l1);


    $p->affiche();

    ?>

</body>

</html>