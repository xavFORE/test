<?php

$users = ["xavier","olivier","remi","alexis","nelly","mehdi","hanane","bouchra","karim"];

    if ( $_POST )
    {
        $nom = $_POST[ "nom" ];

            if ($nom == "xavier")
                print($nom . " -> " . "vieux");
            else if ($nom == "olivier")
                print($nom . " -> " . "voyage");
            else if ($nom == "remi")
                print($nom . " -> " . "train");
            else if ($nom == "alexis")
                print($nom . " -> " . "voiture");
            else if ($nom == "nelly")
                print($nom . " -> " . "rage");
            else if ($nom == "mehdi")
                print($nom . " -> " . "ange");
            else if ($nom == "hanane")
                print($nom . " -> " . "argan");
            else if ($nom == "bouchra")
                print($nom . " -> " . "brownie");
            else if ($nom == "karim")
                print($nom . " -> " . "javascript");
            else print($nom . " qui est tu ?");
        
        // si xavier  -> vieux
        // si olivier  -> voyage
        // remi     -> train
        // alexis   -> voiture
        // nelly    -> rage
        // mehdi    -> ange
        // hanane   -> argan
        // bouchra  -> brownie
        // karim    -> javascript   
        
        exit();
    }
?>

<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>
