
<h1>Hello le PHP</h1>

<p> Deux bieres allemande sont sur un bateaux <br> <p>
<p> Une d'elle tombe à l'eau <br> </p>
<p> Que dit elle ? <br> </p>

<button onclick = devinette()>reponse</button>

<div id=reponse></div>

<?php

    $nom = "toto";

    for( $i=0 ; $i<3 ; $i++ ) 
        print( "<h1>Hello $nom    ligne:$i</h1>\n" );


        $listePrenoms =["olivier", "karim", "remi", "xavier", "alexis"]; 
        foreach ($listePrenoms as $prenom) {
            disBonjour( $prenom ); 
        }

        // calcul somme 1
        $listeChiffre = [7, 10, 15, 40, 70]; 
        $somme = 0;
        foreach ($listeChiffre as $chiffre) {
            $somme += $chiffre; 
        }
        print ("la somme est de " .$somme);
        print ("<br>");

        $moyenne = $somme / count( $listeChiffre); 

        print ("la moyenne est de " .$moyenne); 
        print ("<br>"); 

        // calcul somme 2
        $listeChiffre1 = [7, 10, 15, 40, 20];

        $somme1 = array_sum($listeChiffre1); 

        print ("la somme1 est de " .$somme1);
        print ("<br>");

       
    
        
           // $moyenne=0;
           // $moyenne = ($somme / count($listeChiffre));       
            

    
        
    function disBonjour( $nom )
    {
        $nom = strtoupper($nom); 
        if ($nom == "Alexis")
        print ( "$nom dit : j'aime le LOSC<br>\n");
        else if ($nom == "Olivier")
        print( "$nom dit : j'aime LENS<br>\n" );
        else 
        print( "bonjour $nom<br>\n" );
    }
        addition (1, 10);
    function addition($a, $b)
{
    
    $resultat = $a + $b; 
    print ("resultat =".($a + $b));
    print ("<br>");    
    print ("resultat = $resultat<br>");
}
?>