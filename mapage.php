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
<<<<<<< HEAD
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
=======
        .pop
        {
            z-index : 10;
            width : 300px; 
            height : 300px;
            background-color : grey; 
            border: 2px solid black; 
            margin: auto;
>>>>>>> origin/sessions
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