<?php

$entreprise = 
[   // fonc    nom          age   pw
    [ "fonction" => "S", "age" => 23,  "nom" => "Dupont", "pw" => "fdfdf", "statut" => "alternant" ],
    [ "fonction" => "S", "nom" => "Durant",        "age" => 24, "pw" => "fkghf" ],
    [ "fonction" => "S", "nom" => "Martin",        "age" => 26, "pw" => "123"  ],
    [ "fonction" => "B", "nom" => "Satanas",       "age" => 26, "pw" => "camel"  ],
    [ "fonction" => "C", "nom" => "Ramirez",       "age" => 23, "pw" => "fdfdf", "statut"=> "végé" ],
    [ "fonction" => "C", "nom" => "Antonio",       "age" => 24, "pw" => "fkghf" ],
    [ "fonction" => "C", "nom" => "Messi",         "age" => 26, "pw" => "123"  ]
];

function affInfo( $titre, $personne )
{
    print( $titre."<br>");
    if( array_key_exists( "statut", $personne  ) )
    {
        print("statut = ".$personne['statut']."<br>");
    }
    print("->>>>".$personne['nom']."<<<<<br>");
    print($personne['age']." ans<br>");
}


foreach( $entreprise as $personne )
{
    // BOSS
    if ( $personne["fonction"] == "B" )
    {
        affInfo( 'I am the Boss !!!', $personne );

        print("inscrire Salarié <br>");
        print("mettre le salaire<br>");
    }
    
    // Salarié 
    if ( $personne["fonction"] == "S" )
    {
        affInfo( 'I a worker !!!', $personne );

        print("inscrire Client<br>");
    }
    
    // Client
    if ( $personne["fonction"] == "C" )
    {
        affInfo( 'I a customer !!!', $personne );

        print("acheter des tickets<br>");
    }
    
        print('<br><br>');
}









?>