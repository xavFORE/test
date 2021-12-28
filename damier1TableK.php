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
    $compteur=0;    
    for( $i=0 ; $i<$ligne ; $i++ )
    {
        print( "<tr>\n");
        for( $j=0 ; $j < $colone ; $j++ )
        {
            //if ( $i % 2 == 0 && $j % 2 == 0)
            if ( ($i+$j) % 2 == 0 )
                $class="class='noir'";
            else
                $class="class='blanc'";
<<<<<<< HEAD
            print( "<td $class onclick='caseTest($compteur)'>\n");
=======
            //print( "<td $class>\n");
            print( "<td onclick='testCase( $compteur )' $class>\n");
>>>>>>> origin/revisionX
            print( "</td>\n");
            $compteur++;
        }
        print( "</tr>\n");
    }

    $numHaz = rand( 0, $compteur);
?>
</table>

<div id="mess"></div>

<script>
    let numHaz = <?=$numHaz?>;
    
    function testCase( numCase )
    {
        console.log( "je suis la case : " + numCase);
        let message = "";
        if ( numCase > numHaz  )
            message = "trop grand !!!!";
        else 
        if ( numCase < numHaz )
            message = "trop petit !!!!";
        else
            message = "gagné !!!!";

        document.getElementById( "mess").innerHTML = message;
    }

</script>

</body>
</html>