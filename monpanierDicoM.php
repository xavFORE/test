<?php

$monPanier = 
[
    [ "qte" =>  2.5,   "article" => "fraise"         ,     "pu" =>    5 ],
    [ "article" => "framboise"      ,  "qte" =>  1.2,   "pu" =>    5 ],
    [ "article" => "sucre"          ,  "qte" =>  7  ,   "pu" =>    0.85 ],
    [ "article" => "sardine"        ,  "qte" =>  0.2,   "pu" =>    2.34, "dispo" => 0  ],
    [ "article" => "mitraillette"   ,  "qte" =>  9  ,   "pu" =>    999 ],
    [ "article" => "marteau"        ,  "qte" =>  9  ,   "pu" =>    1.2 ],
    [ "article" => "frites"         ,  "qte" =>  9  ,   "pu" =>    13.5, "promo" => 5 ]
];
//print( $monPanier[1][1]  );

$total = 0;

$prixTotalPanier = 0;


foreach ($monPanier as $key => $value) 
{
    $nom    = $value[ "article" ];
    $qte    = $value[ "qte" ];
    $prix   = $value[ "pu"  ]; 

    if ( array_key_exists( "dispo", $value ) )
    {
        if ( $value[ "dispo" ] == 0 )
            $qte = 0;       
    }


    if ( array_key_exists( "promo", $value ) )
        $prix -= $value[ "promo" ];

    $prixTotal = $prix * $qte;

    $prixTotalPanier = $prixTotalPanier + $prixTotal;

    print( "le prix des $nom est $prixTotal € <br>" );
}

print( "le total est $prixTotalPanier € <br>" );



?>