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
<body id='body'>

<table style="border: 2px solid black">
<?php
    $ligne = 8;
    $colone = 8;
    $compteur = 0;
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
            $compteur++;
            print( "<td onclick='testCase($compteur)' $class>\n");
            print( "</td>\n");
        }
        print( "</tr>\n");
    }
?>
</table>
<br>
<!-- <button onclick="rejouer()">Rejouer</button> -->
<br>
<div id="mess"></div>
<script>
    // var x = Math.floor(Math.random() * 65);
    <?php $x = rand(1,64); ?>
    function testCase(numCase)
    {
        let message = "<h1>Perdu !</h1>";
        let couleur = "red";
        // console.log(x);
        if(numCase < <?=$x?>)
        {
            message = "<h1>Perdu ! "+numCase+" Trop bas</h1>";
            couleur = "red";
        }
        else if(numCase > <?=$x?>)
        {
            message = "<h1>Perdu ! "+numCase+" Trop haut</h1>";
            couleur = "red";
        }
        else
        {
            couleur = "green";
            message = "<h1>Gagné ! "+numCase+"</h1>";
        }

        document.getElementById("mess").innerHTML = message;
        document.getElementById("body").style = "background-color: "+couleur;
    }

    // function rejouer()
    // {
    //     x = Math.floor(Math.random() * 65);
    //     document.getElementById("mess").innerHTML = "";
    //     document.getElementById("body").style = "background-color: white";
    // }
</script>
</body>
</html>