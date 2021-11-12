<?php
    if ( $_POST )
    {
        $nom = $_POST[ "nom" ];
        
        // si xavier  -> vieux
        // si olivier  -> voyage
        // remi     -> train
        // alexis   -> voiture
        // nelly    -> rage
        // mehdi    -> ange
        // hanane   -> argan
        // bouchra  -> brownie
        // karim    -> javascript  
        
         $nom = [
             "xavier"       =>" vieux",
            " olivier"      => "voyage",
             "remi"         =>" train",
             "alexis"       => "voiture",
             "nelly"        => "rage",
             "mehdi"        => "ange",
             "hanane"       => "argan",
             "bouchra"      => "brownie",
             "karim"        => "javacript"
         ];
         //print_r (array_values[$nom] );

        print($nom[$_POST['nom']] );


        exit();
        
    }

?>




<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>
