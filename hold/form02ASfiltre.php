<?php
    if ( $_POST )
    {
        $prenoms = [
            "xavier"    => " est vieux",
            "olivier"   => " vas voyage",
            "remi"      => " est dans le train",
            "alexis"    => " achète des voitures",
            "nelly"     => " est en rage",
            "mehdi"     => " est un ange",
            "hanane"    => " utulise de argan",
            "bouchra"   => " aime les brownies",
            "karim"     => " est un crack en javascript",
        ];

        $nom = strtolower($_POST[ "nom" ]);
        
        $mes = $prenoms[ $nom ];

       print( $mes."<br>" );

    

        // XaviER
        $nom = $_POST[ "nom" ];

        // XaviER -> xavier
        $nom = strtolower( $nom  );
        
        if ( array_key_exists( $nom, $prenoms ) )
        {
            $mes = $prenoms[ $nom ];
            print( $nom." ".$mes."<br>" );
        }
        else
        {
            print( $nom." inconnu <br>" );
        };
        $ajouter = $_POST["ajoutnom"];
        array_push($prenoms, $ajouter);
        foreach ($prenoms as $key => $value) {
            print($value.'<br>');
        }
        
        //exit();
    };
?>


<form action="#" method="post">
    <input type="text" name="nom" placeholder="recherche">
    <input type="text" name="ajoutnom" placeholder="ajouter">
    <br>
    <button type="submit">OK</button>
</form>
