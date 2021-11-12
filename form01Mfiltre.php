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
            "karim"     => " est un crack en javascript"
        ];

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
            session_start() ;
            $_SESSION[$prenoms[ $nom ]] = "nouveau dans la liste";
            print( "ajout de ".$nom." dans le dictionnaire<br>" );
        }
        
        //exit();
    }
?>


<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>
