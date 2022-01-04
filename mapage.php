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
        .pop 
        {   
            width: 50%;
            height: 100%; 
            padding: 10px; 
            background-color: white;
            border: 1px solid black; 
            box-shadow: 6px 6px 3px 3px black; 
            margin: auto; 
            text-align: center;  
        }
    </style>

</head>
<body >
    <div>
    ma super belle page <br>
    <a href="session2WC.php">suite</a>
    </div>
</body>
</html>
<?php
$_SESSION[ 'plat']      = "couscous";
$_SESSION[ 'boisson']   = "sidi brahim";
?>

