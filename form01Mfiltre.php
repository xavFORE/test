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
<<<<<<< HEAD
            "karim"     => " est un crack en javascript",
        ];

        $nom = $_POST[ "nom" ];
        
        $mes = $prenoms[ $nom ];

        print( $mes."<br>" );


        // si xavier  -> vieux
        // si olivier  -> voyage
        // remi     -> train
        // alexis   -> voiture
        // nelly    -> rage
        // mehdi    -> ange
        // hanane   -> argan
        // bouchra  -> brownie
        // karim    -> javascript   
=======
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
>>>>>>> b72ebc854e26ed9e0672ebfc9b8d6e7f2a792b15
        
        //exit();
    }
?>


<<<<<<< HEAD


=======
>>>>>>> b72ebc854e26ed9e0672ebfc9b8d6e7f2a792b15
<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>
