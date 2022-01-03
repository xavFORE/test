<?php
ini_set("session.use_cookies", 0);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");

session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <a href="demo_session2.php"> lien </a>
        ok 
<?php
// Set session variables
$_SESSION["nom"] = "megri";
$_SESSION["prenom"] = "karim";
echo "Session variables are set.";
?>
</body>
</html>