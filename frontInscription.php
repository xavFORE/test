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
function addUsers()
    {
        let login = $( "#login" ).val();
        let pw = $( "#pw" ).val();

        $.post(
            "addUsersPost.php",
            {
                login : login,
                pw : pw,  
            },
            function(data, status)
            {
                
            }
        );
    }
</script>
<input type="text" id="login" placeholder="login">
<br>
<input type="text" id="pw" placeholder="password">
<br>


<?php
    require_once "ressources.php";
    require_once "fonctions.php";

?>
<br>

<button onclick="addUsers()">OK</button>
<br>
</body>
</html>
