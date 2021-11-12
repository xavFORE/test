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
          $presentTab = array_key_exists($nom,$prenoms );

        if ($presentTab ) {
      
        $mes = $prenoms[ $nom ];
        print( $mes."<br>" );
        }
        else {
            print ("nom pas present");
            $newPrenoms = array_push($prenoms, ("$nom => 'pas encore définis'"));
            foreach ( $newPrenoms as $i => $element) {
            print("$i => $element");
            
            
             
        }
        
 }
        // si xavier  -> vieux
        // si olivier  -> voyage
        // remi     -> train
        // alexis   -> voiture
        // nelly    -> rage
        // mehdi    -> ange
        // hanane   -> argan
        // bouchra  -> brownie
        // karim    -> javascript   
        
        //exit();
    }
?>




<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>
