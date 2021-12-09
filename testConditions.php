<?php
    require_once "ressources.php";
    require_once "fonctions.php";
    entete( "tst conditions");

    $age = 19;
    if ( $age < 18  )
    {
        ?>
        <h2> mineur de fonds</h2>
        <?php
    }
    else
    {
        ?>
        <h2> majeur d'homme</h2>
        <?php
    }
    ?>
    tu as <?=$age?> ans.
    <?php

?>
 Bye !!!!

 <?php comboBox( 'auteurs' )?>
</body>
</html>