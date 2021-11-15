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

        $nom = $_POST[ "nom" ];

        $nom = strtolower( ( $nom ));
        
        $mes = $prenoms[ $nom ];

        print( $mes."<br>" );

        
        //exit();
    }
?>

<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>
