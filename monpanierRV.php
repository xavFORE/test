<?php


$monPanier = 
[
    [ "fraise"      ,     2.5,      5 ],
    [ "framboise"   ,     1.5,      5 ],
    [ "sardine"     ,     0.2,    4.5 ],
    [ "sucre"       ,       7,      1 ],
    [ "PQ"          ,     100,    0.5 ],
    [ "mitraillete" ,       9,    999 ],
    [ "chaussettes" ,       3,     15 ]
];


print($monPanier[1][1]);

$total = 0; 
$somme = 0; 
$sommeT = 0; 

foreach ($monPanier as $key => $value) {
    $nom = $value [0];
    $quantite = $value [1]; 
    $prix = $value [2]; 
    
    $somme = $prix * $quantite; 
    $sommeT += $somme;

    print("pour $nom, avec pour quantité $quantite et pour prix $prix, sa valeur est de $somme $<br>");
}

$total = $sommeT; 

print("prix total = $total $");











?>