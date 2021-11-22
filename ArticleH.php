<?php

class Article
{  
    private $non;
    private $prix;
  
   
    function __construct( $nom, $prix )
    {
        $this->nom = $nom;
        $this->prix = $prix;
        print("nouvel article :  $this->nom<br>");
    }

    function __toString()
    {
        return $this->nom;
    }
    function getPrix()
    {
        return $this->prix;
    }
    function affLigneTab()
    {
        print( "<tr><td>$this->nom</td><td>$this->prix</td></tr>");
    }
}

?>