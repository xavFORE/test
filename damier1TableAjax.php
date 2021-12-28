<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
            //print( "<td $class>\n");
            print( "<td onclick='testCase( $compteur )' $class>\n");
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
    var numHaz = getNumberRandom( );

    console.log( numHaz );
    
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


    function getNumberRandom( nbrCase  )
    {
        let dictTXT =  $.ajax(
            {
                type: "GET",
                url: 'http://localhost/work/test/getRandom.php',
                async: false
            }).responseText;

        dictVAL = JSON.parse( dictTXT );
        
        let nom = dictVAL[ 'nom' ];
        console.log( nom );
        console.log( dictVAL );
        
        let hazard = dictVAL[ 'valeurHazard' ]; 
        return hazard;
    }

</script>

</body>
</html>