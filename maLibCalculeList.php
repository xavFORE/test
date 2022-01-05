<?php

    function sommeDuneListe( $liste )
    {
        if ( count($liste) == 0 )
        {
            throw new Exception( "la liste est vide" );
        }

        $total = 0;
        foreach ($liste as $key => $value)
            if ( gettype( $value) == "integer" || gettype( $value) == "double") 
                $total += $value;
            else
                throw new Exception( "$value n'est pas un chiffre" );                
        
        if ( $total == 0 )
        {
            throw new Exception( "la liste ne contien pas de chiffre" );
        }
        return $total;
    }


    function moyenne( $liste)
    {
        $total = sommeDuneListe( $liste );

        if ( count($liste) == 0 )
        {
            throw new Exception( "division par zéro" );
        }
        $moyenne = $total / count($liste);
        return $moyenne;
    }
?>