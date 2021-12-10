<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    if ($_GET)
    {
        if ( isset( $_GET[ 'message' ] ) )
        {
            $table = $_GET[ 'table' ];
            $message = $_GET[ 'message' ];
            entete( $message );
            ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="text" name='item' placeholder="add item">
            <input type="hidden" name='table' value="<?=$table?>">
            <br>
            <button type="submit">OK</button>
            </form>
            <?php
        }
        else
        {
            $item = $_GET[ 'item' ];
            $table = $_GET[ 'table' ];
            $query  = "insert into $table ( nom ) values ( '$item' );";
            print( $query );
            if ( query( $query ) )
            {
            ?>
            <h3>enregistrement OK</h3>
            <script>
                window.close();
            </script>
            <?php
            }
            else
            {
                ?>
                <h3>erreur enregistrement</h3>
                <?php
            }
    
        }
    }
?>
</body>
</html>