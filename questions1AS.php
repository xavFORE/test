<?php
if ($_POST || isset($_COOKIE['cookie'])) {
    if (isset($_POST['cancel'])) {
        ini_set("session.use_cookies", 0);
        ini_set("session.use_only_cookies", 0);
        ini_set("session.use_trans_sid", 1);
        ini_set("session.cache_limiter", "");
    }else{
    setcookie("cookie[one]", "cookieone");
    }
    session_start();
    include("mapageAS.php");
} else {
    include("mapageAS.php");
?>
    
    <div class="pop">
        veuillez accepter les cookies
        <form action="#" method="POST">
            <button type="submit" name="ok">OK</button>
            <button type="cancel" name="cancel">NO</button>
        </form>
    </div>
<?php
}
?>