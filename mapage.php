<?php
session_start();

if ( !isset( $_SESSION[ 'nom' ]) )
{
    session_destroy();
    header( "location: questions1.php");
}

$nom = $_SESSION[ 'nom' ];

?>
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
            z-index : 10;
            width : 300px; 
            height : 300px;
            background-color : grey; 
            border: 2px solid black; 
            margin: auto;
        }
    </style>

</head>
<body >
    <div>
    ma super belle page de <?=$nom?><br>
    <br>
    <a href="session2WC.php">suite</a>
    </div>
</body>
</html>
<?php
?>