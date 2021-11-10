<?php
    if ( $_POST )
    {
        $nom = $_POST[ "nom" ];
        print( "bonjour ".$nom."<br>" );
     
        $mail = $_POST["mail"];
        print( "mail : ".$mail."<br>" );
        //exit();

        $pw = $_POST["pw"];
        print( "mot de passe : ".$pw."<br>" );
        //exit();

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
