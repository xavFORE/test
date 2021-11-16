<?php

$monPanier = [
                [ "fraise"      ,     2.5,      5 ],
                [ "framboise"   ,     1.5,      5 ],
                [ "sardine"     ,     0.2,    4.5 ],
                [ "sucre"       ,       7,      1 ],
                [ "PQ"          ,     100,    0.5 ],
                [ "mitraillete" ,       9,    999 ],
                [ "chaussettes" ,       3,     15 ]
            ];

$toto = 0;

print("Tableau for :<br><br>");

for ( $i=0; $i < count($monPanier) ; $i++ ) { 
    print( $monPanier[$i][0] . " " . $monPanier[$i][1] . "X" . $monPanier[$i][2] . " -> " );
    $res = $monPanier[$i][1] * $monPanier[$i][2];
    $toto += $res;
    print(  "Prix : " . $res . "<br>" );
}

print("<br>Total : " . $toto . "<br>_______________________________<br><br>");

$totow = 0;

print("Tableau while :<br><br>");

$i = 0;

while ( $i < count($monPanier)) {
    print( $monPanier[$i][0] . " " . $monPanier[$i][1] . "X" . $monPanier[$i][2] . " -> " );
    $res = $monPanier[$i][1] * $monPanier[$i][2];
    $totow += $res;
    print(  "Prix : " . $res . "<br>" );
    $i++;
}

print("<br>Total : " . $totow . "<br>_______________________________<br><br>");

print("Tableau foreach :<br><br>");

$totox = 0;

foreach ($monPanier as $key) {
    print( $key[0] . " " . $key[1] . "X" . $key[2] . " -> " );
    $res = $key[1] * $key[2];
    $totox += $res;
    print(  "Prix : " . $res . "<br>" );
}

print("<br>Total : " . $totox . "<br><br>");

$monPanierD = [
                [ "fraise"      ,     2.5,      5 ],
                [ "framboise"   ,     1.5,      5 ],
                [ "sardine"     ,     0.2,    4.5 ],
                [ "sucre"       ,       7,      1 ],
                [ "PQ"          ,     100,    0.5 ],
                [ "mitraillete" ,       9,    999 ],
                [ "chaussettes" ,       3,     15 ]
            ];

$res = 0;

foreach ($monPanierD as $key => $value) {
    $nom = $value[0];
    $qte = $value[1];
    $prix = $value[2];

    $prixTotal = $prix * $qte;
    $res += $prixTotal;
    print("le prix des $nom est $prixTotal €<br>");
}

print("le prix total est $res €<br>");

?>