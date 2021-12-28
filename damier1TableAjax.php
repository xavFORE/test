<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

?>
</table>

<div id="mess"></div>

<script>
    
   /* function getNumberRandom1()
    {   let number = 0; 
        $.get(
            // premier param URL qui fournit les données
            "http://localhost/work/testold/GetNumberBack.php",
            // deuxieme param fonction callBack qui traite les données 
            function( data, status )
            {
                    number = JSON.parse( data );
            }   
        );
        return number; 
    }*/
    var numHaz =getNumberRandom(<?=$compteur?>);
    
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
    function getNumberRandom(compteur)
    {    
        //console.log(compteur); 
        let dictTXT = $.ajax({ 
                        type: "GET",   
                        url: "http://localhost/work/testold/GetNumberBack.php?compteur=" + compteur,   
                        async: false
                      }).responseText;
             dictVal = JSON.parse(dictTXT);
            console.log(dictVal); 
            let numHaz = dictVal['numHaz']; 

            console.log(numHaz);
            return numHaz;      
    } 


</script>
        <div id="res"></div>
        <input type=range></input>
</body>
</html>