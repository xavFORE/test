<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    $compteur =0;
    $numRandom= rand(0, 63);
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
                print( "<td onclick='caseTest($compteur)' $class >\n");
                print( "</td>\n");
                $compteur++; 
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
                print( "<td onclick='caseTest($compteur)' $class >\n");
                print( "</td>\n");
                $compteur++; 
            }
            print( "</tr>\n");
        }
    }
?>
</table>
<script>
function caseTest(num)
{    
    let cases = "Tu as perdu"; 
    if (num == <?=$numRandom?>)
    document.getElementById('res').innerHTML = "Tu as gagné";
    else 
    document.getElementById('res').innerHTML = cases;
}

</script>
<div id="res"></div>
</body>
</html>