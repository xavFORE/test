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
                console.log( data ); 
                let res = JSON.parse( data );
                res = res[0]; 
                let id = res['id']; 
                let titre = res['titre'];
                let description = res['description'];
                let priorite = res['priorite'];
                let dateLimit = res['dateLimit'];

                $('#titre').val(titre);
                $('#description').val(description);
                $('#priorite').val(priorite);
                $('#dateLimit').val(dateLimit);
                console.log(id, titre, description, priorite, dateLimit); 
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
<input type="text" id="titre" placeholder="titre" value="">
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

    $id = $_GET['id'];
?>
<br>

<button onclick="updateTask()">OK</button>
<br>
</body>
</html>
