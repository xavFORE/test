<?php

$monPanier = 
[
    [ "fraise"      ,     2.5,      5 ],
    [ "framboise"   ,     1.5,      5 ],
    [ "sardine"     ,     0.2,    4.5 ],
    [ "sucre"       ,       7,      1 ],
    [ "PQ"          ,     100,    0.5 ],
    [ "mitraillete" ,       9,    999 ],
    [ "chaussettes" ,       3,     15 ],
    [ "martiner"    ,       2,     2.5]
];

$prix_un_article = "0";
foreach ($monPanier as $value ) {
    $prix_un_article +=($value[1]*$value[2]."<br>");
    print_r("pour ".$value[1]." ".$value[0]." ça coute ".$prix_un_article."<br>");
}
print("le prix total et de ".$prix_un_article." euros");










?>