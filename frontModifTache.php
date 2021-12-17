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
<body>
<script>
function addCreateTask()
    {
        let titre = $( "#titre" ).val();
        let description = $( "#description" ).val();
        let priorite = $( "#priorite" ).val();
        let dateLimit = $( "#dateLimit" ).val();

        $.post(
            "addTachePost.php",
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
<input type="text" id="titre" placeholder="titre" required>
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

<button onclick="addCreateTask()">OK</button>
<br>
</body>
</html>
