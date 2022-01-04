<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("images/av4.png");
        }

        .pop {
            height: 100px;
            width: 200px;
            display: block;
            margin: 0 auto;
            background-color: cornsilk;
        }
    </style>

</head>

<body>
    <div>
        ma super belle page <br>
        <a href="session2WCAS.php">suite</a>
    </div>
</body>

</html>


<?php
$_SESSION['plat']      = "couscous";
$_SESSION['boisson']   = "sidi brahim";
?>