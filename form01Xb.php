<?php
    if ( $_POST )
    {
        $nom = $_POST[ "nom" ];
        $nom = htmlspecialchars($nom, ENT_QUOTES);
        print( "bonjour ".$nom."<br>" );
     
        $mail = $_POST["mail"];
        
        if ( filter_var( $mail, FILTER_VALIDATE_EMAIL ) )
        {
            print( "mail : ".$mail."<br>" );
        }
        else 
            print( "mail invalide ! <br>" );

        $pw = $_POST["pw"];
        print( "mot de passe : ".$pw."<br>" );

        $age = $_POST["age"];
        print( "tu as : ".$age." ans<br>" );
        
        //exit();
    }
?>




<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <input type="text" name="mail" placeholder="ton mail">
    <br>
    <input type="text" name="pw" placeholder="ton mot de passe">
    <br>
    <input type="text" name="age" placeholder="ton age">
    <br>
    <button type="submit">OK</button>
</form>
