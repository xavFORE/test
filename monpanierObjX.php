<?php

//require "maLibObjX.php";
include "maLibObjX.php";

$monPanier = [];
//print( $monPanier[1][1]  );


$article1 = new Article( "fraise", 7.19, 3 );
$article1->setPromoPercent( 10 );

$article1->setQte( 10 );
$article1->setPrix( 1.5 );


array_push( $monPanier, $article1 );
array_push( $monPanier,  new Article( "framboise", 7.19, 2.5 )  ); 
array_push( $monPanier,  new Article( "sucre",  0.19, 7 )  ); 
array_push( $monPanier,  new Article( "sardine", 2.55, 9 )  ); 
array_push( $monPanier,  new Article( "huile foie de morue", 3.5, 1 )  ); 
array_push( $monPanier,  new Article( "chaussettes", 15, 3 )  ); 
array_push( $monPanier,  new Service( "laver chaussettes", 20, "09:00" )  ); 
array_push( $monPanier,  new Service( "pecher sardines", 123, "01:00" )  ); 
array_push( $monPanier,  new Service( "coiffure", 14, "14:00" )  ); 


$monPanier[4]->setPromoPercent( 50 );


$sommePanier = 0;
foreach( $monPanier as $article )
{
    print( $article->affiche()."<br>" );
    $sommePanier += $article->getMontant();
}

print( "<br>");
print( "montant total $sommePanier<br>");



?>