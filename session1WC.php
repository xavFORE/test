
<?php
ini_set("session.use_cookies", 0);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");
session_start();        
$_SESSION[ 'plat']      = "couscous";
$_SESSION[ 'boisson']   = "sidi brahim";
?>
<a href="session2WC.php">suite</a>
