<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            background-image : url( "images/av4.png");
        }

        .myDiv
        {
            background-color: yellow;
            padding: 10px;
            border: solid black 3px;
            width: 30%;
            margin: auto;
        }

        .pop
        {
            background-color: orange;
            padding: 10px;
            border: solid black 3px;
            width: 30%;
            margin: auto;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<?php
    require_once "questions1.php";
?>
    <div class="myDiv">
        ma super belle page <br>
        <a href="session2WC.php">suite</a>
    </div>
</body>
</html>
<?php
    $_SESSION[ 'plat']      = "couscous";
    $_SESSION[ 'boisson']   = "sidi brahim";
?>