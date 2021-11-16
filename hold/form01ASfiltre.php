<?php
    if ( $_POST )
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenon = [
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
            
            foreach ($prenon as $i => $element) {
                if ($nom == $i) {
                    print($i.$element." ");
                } 
            }
        
            
        exit();
    }
?>




<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>
