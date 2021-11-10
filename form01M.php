<?php

    /*if ( $_POST )
    {

        $nom = $_POST[ "nom" ];    
        $mail = $_POST["mail"];
        $pw = $_POST["pw"];
        $age = $_POST["age"];

        if (filter_var($mail, FILTER_VALIDATE_EMAIL))
            print ("L'adresse email '" . $mail . "' est considérée comme valide.");
    
        else
            print ("L'adresse email '" . $mail . "' est considérée comme invalide.");
        
    }*/

?>

<form action="form02M.php" method="post">

    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <input type="text" name="mail" placeholder="ton mail">
    <br>
    <input type="password" name="pw" placeholder="ton mot de passe">
    <br>
    <input type="text" name="age" placeholder="ton age">
    <br>
    <button type="submit">OK</button>

</form>
