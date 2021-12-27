<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damier en php</title>
    <style>
        .blanc
        {
            width: 50px;
            height: 50px;
            background-color: white;
        }
        .noir
        {
            width: 50px;
            height: 50px;
            background-color: black;
        }
    </style>
</head>
<body>

<table>
<?php
    $ligne = 8;
    $colone = 8;
    for( $i=0 ; $i<$ligne ; $i++ )
    {
        // la ligne est-elle pair ?
        if ( $i % 2 == 0 )
        {
            print( "<tr>\n");
            for( $j=0 ; $j < $colone ; $j++ )
            {
                // la colonne est-elle pair ?
                if ( $j % 2 == 0 )
                    $class="class='noir'";
                else
                    $class="class='blanc'";
                print( "<td $class>\n");
                print( "</td>\n");
            }
            print( "</tr>\n");
        }
        // sinon
        else
        {
            print( "<tr>\n");
            for( $j=0 ; $j < $colone ; $j++ )
            {
                if ( $j % 2 == 0 )
                    $class="class='blanc'";
                else
                    $class="class='noir'";
                print( "<td $class>\n");
                print( "</td>\n");
            }
            print( "</tr>\n");
        }
    }
?>
</table>
</body>
</html>