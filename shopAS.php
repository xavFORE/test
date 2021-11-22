<?php

require "ArticleAS.php";
require "ClientAS.php";
require "PanierAS.php";


$a0 = new Article( "meto à roulettes", 99999  );
// nouvel article : meto à roulettes

$a1 = new Article( "velo", 344  );
//

$a2 = new Article( "lampe", 3.45  );
$a3 = new Article( "mug FE", 5  );
$a4 = new Article( "téléphone i30", 1500  );
$a5 = new Article( "bouteille eau 50cl", 0.2  );
$a6 = new Article( "Ferrari rouge", 10.5  );
$a7 = new Article( "Raspberry PI 4", 50.99  );
$a8 = new Article( "Ordinateur", 699  );
$a9 = new Article( "Maison", 750000  );


$c1 = new Client( "Roger" );
// nouveau client Roger

$p1 = new Panier();
// nouveau Panier


$c1->ajouteArticle( $p1, $a5 );
// Roger à ajouter bouteille d'eau dans son panier
$c1->ajouteArticle( $p1, $a2 );
//
$c1->ajouteArticle( $p1, $a7 );


$p1->affiche();
// Bouteille d'eau
// velo
// raspberry PI 4


?>