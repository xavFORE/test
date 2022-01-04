<?php
    if ( $_POST )
    {
        $nom = $_POST[ 'nom' ];
        $pw = $_POST[ 'pw' ];

        if ( $nom == 'toto' && $pw == 'toto')
        {
            session_start();
            $_SESSION[ 'nom' ] = $nom;
            $_SESSION[ 'ip' ] = $IP;
            $_SESSION[ 'nav' ] = $nav;
            
            header( "location: mapage.php" );
        }
    }

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
            background-image : url( "images/av2.png");
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
    LOGING <br>
    <form action="#" method="POST">
    <input type="text" name="nom" placeholder="login">    
    <input type="text" name="pw" placeholder="password">    
    <button type="submit">OK</button>
    </form>
    <br>
    <a href="session2WC.php">suite</a>
    </div>
</body>
</html>
<?php
$_SESSION[ 'plat']      = "couscous";
$_SESSION[ 'boisson']   = "sidi brahim";
?>