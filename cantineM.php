<?php

$entreprise = 
[   // fonc    nom          age   pw
    [ "S", "Dupont",        23, "fdfdf" ],
    [ "S", "Durant",        24, "fkghf" ],
    [ "S", "Martin",        26, "123"  ],
    [ "B", "Satanas",       26, "camel"  ],
    [ "C", "Ramirez",       23, "fdfdf" ],
    [ "C", "Antonio",       24, "fkghf" ],
    [ "C", "Messi",         26, "123"  ]
];

function affInfo( $titre, $personne )
{
    print( $titre."<br>");
    print("<h5>$personne[1]</h5>");
    print($personne[2]." ans<br>");
}


foreach( $entreprise as $personne )
{
    // BOSS
    if ( $personne[0] == "B" )
    {
        affInfo( 'I am the Boss !!!', $personne );

        print("inscrire Salarié<br>");
        print("mettre le salaire<br>");
    }
    
    // Salarié
    if ( $personne[0] == "S" )
    {
        affInfo( 'I a worker !!!', $personne );

        print("inscrire Client<br>");
    }
    
    // Client
    if ( $personne[0] == "C" )
    {
        affInfo( 'I a customer !!!', $personne );

        print("acheter des tickets<br>");
    }
    
        print('<br><br>');
}









?>