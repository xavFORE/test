<?php

function entete( $titre )
{
    print( '<!DOCTYPE html>');
    print( '<html lang="fr">');
    print( '<head>');
    print( '    <meta charset="UTF-8">');
    print( '    <meta http-equiv="X-UA-Compatible" content="IE=edge">');
    print( '    <meta name="viewport" content="width=device-width, initial-scale=1.0">');
    print( "    <title>$titre</title>");
    print( '</head>');
    print( '<body>');
}   

    function ecritEnGrand($ecrit)
    {
        print("$ecrit");
    }

function pied()
{
    print( '</body>');
    print( '</html>');
}



?>