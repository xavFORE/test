<?php
require_once("ClientAS.php");
class Panier 
{
    private $articles = [];
    
    function __construct(  )
    {
        print("nouveaux pagnier <br>");
    }
    
    function mes_dans_le_pagnier( $article){
        $this->articles[]= $article;
    }

    function affiche()
    {
        print("voici les article de mon pagnier :");
        foreach ($this->articles as $key => $value) {
            print($value."  ");
        }
    }


}

?>