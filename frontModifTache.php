<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="fonctions.js"></script>
</head>
<body onload= init()>
<script>

function init()
    {
        $.get(
            // premier param URL qui fournit les données
            "init.php",
            // deuxieme param fonction callBack qui traite les données 
            function( data, status )
            {
                    let tableau = JSON.parse( data );
                    console.log( tableau ); 
                    let chaine = "<table>";
                    for ( ligne of tableau )
                        chaine += "<tr><td>"+ligne['nom']+"</td></tr>";;
                    chaine += "</table>";
                    $( "#aff" ).append( chaine );
            }   
        );
    }

function updateTask()
    {
        let titre = $( "#titre" ).val();
        let description = $( "#description" ).val();
        let priorite = $( "#priorite" ).val();
        let dateLimit = $( "#dateLimit" ).val();

        
        $.post(
            "updateTachePost.php",
            {
                titre : titre,
                description : description, 
                priorite : priorite, 
                dateLimit : dateLimit
            },
            function(data, status)
            {
                
            }
        );
    }
</script>
<input type="text" id="titre" placeholder="titre">
<br>
<input type="text" id="description" placeholder="description">
<br>
<input type="range" id="priorite" min="1" max="3">
<br>

<input type="date" id="dateLimit">
<br>
<?php
    require_once "ressources.php";
    require_once "fonctions.php";

?>
<br>

<button onclick="updateTask()">OK</button>
<br>
</body>
</html>
