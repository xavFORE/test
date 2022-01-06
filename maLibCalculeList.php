<?php
    function sommeDuneListe( $liste )
    {
        if ( count($liste) == 0 )
        {
            throw new Exception( "la liste est vide" );
        }

        $total = 0;
        foreach ($liste as $key => $value)
        {
            $type = gettype( $value );

            if($type == "array")
                throw new Exception( "Array n'est pas un chiffre" );
            if ($type == "boolean" && $value)
                throw new Exception( "1 n'est pas un chiffre" );
            if ($type == "boolean" && !$value)
                throw new Exception( "0 n'est pas un chiffre" );
            else
                $type = $value;
            
            if ( is_numeric( $value )) 
                $total += floatval( $value );
            else
                throw new Exception( "$value n'est pas un chiffre" );
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