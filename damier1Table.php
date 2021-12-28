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
            border: solid black 1px;

        }
        .noir
        {
            width: 50px;
            height: 50px;
            background-color: black;
            border: solid  black 1px;

        }
    </style>
</head>
<body>


<table>
<?php

    $ligne    = 7;
    $colone   = 7;
    $compteur = 0;
        for( $i=0 ; $i<$ligne ; $i++ )
        {
            print( "<tr>\n");
            for( $j=0 ; $j<$colone ; $j++ )
            {
                if ( ($j+$i) % 2 == 0 )
                    $class="class='noir'";
                else
                    $class="class='blanc'";
                print( "<td onclick='testCase($compteur)' $class>\n");
                print( "</td>\n");
                $compteur++;
            }
            print( "</tr>\n");
        }

        $numHaz = rand( 0, $compteur );
?>
</table>
<br>
<div id="message"></div> 


<script>
    let numHaz = <?=random(0,$compteur)?>
    var valeurATrouver = 
   
    function testCase(numeroCase)
    {
        let message= "perdu";
        if (numeroCase == <?=$numHaz?>)
        message = "gagné"
        document.getElementById("message").innerHTML = message; 
    }
    
</script>


</body>
</html>