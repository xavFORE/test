<?php
<<<<<<< HEAD
if(!isset($_COOKIE['zoro'])) {
    
=======

// si le cookie n'existe pas
if( !isset($_COOKIE['zorrox'])) 
{
>>>>>>> origin/sessions
    if ( $_POST )
    {
        if (  isset($_POST[ 'cancel']) )
        {
            ini_set("session.use_cookies", 0);
            ini_set("session.use_only_cookies", 0);
            ini_set("session.use_trans_sid", 1);
            ini_set("session.cache_limiter", "");
        }
<<<<<<< HEAD
        else 
            setcookie('zoro', 'hero');
        session_start();
        include( "mapage.php");
    }
    else
    {
    include( "mapage.php");
    ?>
    
    <div class="pop">
        voulez vous accepter les cookies ? 
        <form action="#" method="POST">
            <button type="submit" name="ok">OK</button>
            <button type="cancel" name="cancel">NO</button>
        </form>
    </div>
    <?php
    }
}
else 
{
    session_start();
        include( "mapage.php"); 

=======
        else
            setcookie('zorro', 'hero');

        session_start();
        include( "login.php");
    }
    else
    {
        require( "login.php");
        ?> 
            <div class="pop">
                veuillez accepter les cookies
                <form action="#" method="POST">
                    <button  type="submit" name="ok">OK</button>
                    <button type="cancel" name="cancel">NO</button>
                </form>
            </div>
        <?php
    }
}
// si le cookie existe
else
{ 
    session_start();
    require( "login.php");
>>>>>>> origin/sessions
}
    ?>