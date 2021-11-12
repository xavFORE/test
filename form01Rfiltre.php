<?php
    if ( $_POST )
    {
        $nom = $_POST[ "nom" ];

        

        $listeNom = ["xavier" => "vieux", 
                     "olivier" => "voyage", 
                     "remi"=>"train", 
                     "alexis"=>"voiture", 
                     "nelly"=>"rage", 
                     "medhi"=>"ange", 
                     "hanane" => "argan", 
                     "bouchra"=>"brownie", 
                     "karim" =>"javascript"]; 

    //methode 1
          $i =""; 
            foreach( $listeNom as $i => $element )
            {
                if ($nom == $i) {
                    print("la valeur est $element");
                }  
            }
    }
    
    //methode 2

        $mes = $i [$element]; 
        
?>




<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>
